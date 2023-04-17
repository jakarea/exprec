<?php

namespace App\Http\Controllers;

use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Facebook\Facebook;
use App\Models\Project;
use App\Models\Ads;
use App\Models\Query;
use Auth;

class AdspyController extends Controller
{
    protected $access_token;

    public function __construct()
    {
        $this->access_token = env('FACEBOOK_ACCESS_TOKEN');
    }

    public function index()
    {
        $projects = Project::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->get();
        $ads = Ads::whereIn('user_ids', [Auth::user()->id])->orderBy('id', 'desc')->get();

        $adsByProject = [];

            foreach ($ads as $ad) {
                $projectIds = explode(',', trim($ad['project_ids'], ','));
                foreach ($projectIds as $projectId) {
                    foreach ($projects as $project) {
                        if ($project['id'] == $projectId) {
                            $adsByProject[$project['name']][] = $ad;
                        }
                    }
                }
            }

        return view('adspy/index', compact('adsByProject'));
    }

    public function facebook()
    {
        $queries = Query::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->take(5)->get();
        $projects = Project::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('adspy/facebook',compact('projects','queries'));
    } 

    public function getAdFromFacebook(Request $request){

        $search_terms = $request->search_terms;
        $countries[] = 'NL';
        $countries[] = 'BD';
        $countries = "'" . implode ( "', '", $countries ) . "'";
        $limit = 5;
        $api_url = 'https://graph.facebook.com/v16.0/ads_archive?fields=id,page_id,page_name,ad_creative_bodies,languages,currency,spend,bylines,publisher_platforms,impressions,estimated_audience_size,demographic_distribution,ad_snapshot_url,ad_creation_time,ad_creative_link_captions,ad_creative_link_descriptions,ad_creative_link_titles,ad_delivery_start_time,ad_delivery_stop_time,delivery_by_region&search_terms='.$search_terms.'&ad_reached_countries=['.$countries.']&'.$limit.'=4&access_token='.$this->access_token;
        $results = Http::get($api_url); 
        return response()->json($results['data']);
    } 


    public function loadMoreData(Request $request)
        {
            $allInputs = $request->all();

            // Separate fields starting with an underscore
            $underscoreFields = array_filter($allInputs, function($key) {
                return substr($key, 0, 1) === '_';
            }, ARRAY_FILTER_USE_KEY);

            // Separate fields not starting with an underscore
            $notUnderscoreFields = array_filter($allInputs, function($key) {
                return substr($key, 0, 1) !== '_';
            }, ARRAY_FILTER_USE_KEY);
            $notUnderscoreFields['ad_reached_countries'] = "['NL']";
            if($request->ad_reached_countries)
                $notUnderscoreFields['ad_reached_countries'] = "[$request->ad_reached_countries]";
            if($request->publisher_platforms)
                $notUnderscoreFields['publisher_platforms'] = "[$request->publisher_platforms]";
            if($request->search_page_ids)
                $notUnderscoreFields['search_page_ids'] = "[$request->search_page_ids]";
            if($request->languages)
                $notUnderscoreFields['languages'] = "[$request->languages]";

            // Generate query string with notUnderscoreFields
            $queryString = http_build_query($notUnderscoreFields);

            // Do something with the query string
            // ...
        
            $nextPage = $request->nextPage;
            $limit = 16;
            $api_url = 'https://graph.facebook.com/v16.0/ads_archive?fields=id,page_id,page_name,ad_creative_bodies,languages,currency,spend,bylines,publisher_platforms,impressions,estimated_audience_size,demographic_distribution,ad_snapshot_url,ad_creation_time,ad_creative_link_captions,ad_creative_link_descriptions,ad_creative_link_titles,ad_delivery_start_time,ad_delivery_stop_time,delivery_by_region&'.$queryString.'&limit='.$limit.'&access_token='.$this->access_token;
            if($nextPage){
                $api_url = $nextPage;
            }
            $results = Http::get($api_url); 
            $uniqueAds = array();
            
            foreach ($results['data'] as $ad) {
                $key = $ad["page_id"] . "_" . $ad["ad_delivery_start_time"];
                if(isset($ad["ad_delivery_stop_time"]))
                    $key .= "_" . $ad["ad_delivery_stop_time"];

                if (!isset($uniqueAds[$key])) {
                    $uniqueAds[$key] = $ad;
                }
            }
            $uniqueAds = array_values($uniqueAds);

            $data['ads'] = $uniqueAds;
            $data['nextPage'] = $results['data'] ? $results['paging']['next'] : '';
            return response()->json($data);
        }

        public function scrapAdById($id){
            $url = "https://www.facebook.com/ads/archive/render_ad/?id=$id&access_token=".$this->access_token;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');
            $result = curl_exec($ch);
            curl_close($ch);

            $snapshot_pos = strpos($result, ',"snapshot":');
            $spend_pos = strpos($result, ',"spend":');
            if ($snapshot_pos !== false && $spend_pos !== false) {
                $length = $spend_pos - $snapshot_pos - strlen(',"snapshot":');
                $substring = substr($result, $snapshot_pos + strlen(',"snapshot":'), $length);
                return json_decode($substring, true);
            }
        }

    public function pinterest($id)
    {
        return view('adspy/pinterest');
    } 

    public function tiktok()
    {
        return view('adspy/tiktok');
    } 

    public function mylist()
    {
        $projects = Project::where('user_id',Auth::user()->id)->orderBy('name', 'asc')->get();
        $ads = Ads::whereIn('user_ids', [Auth::user()->id])->get();
        $adsByProject = [];

            foreach ($ads as $ad) {
                $projectIds = explode(',', trim($ad['project_ids'], ','));
                foreach ($projectIds as $projectId) {
                    foreach ($projects as $project) {
                        if ($project['id'] == $projectId) {
                            $adsByProject[$project['name']][] = $ad;
                        }
                    }
                }
            }
        return view('adspy/mylist', compact('ads'));
    }

    public function details($id)
    {
        $projects = Project::where('user_id',Auth::user()->id)->orderBy('name', 'asc')->get();
        $ad = Ads::where('ad_id', $id)->first();
        $user_ids = explode(',', $ad->user_ids);
        
        $remove = array_search(Auth::user()->id, $user_ids);
        if(!$ad){
            return redirect('adspy/facebook');
        }
        $ad = json_decode($ad->data);

        return view('adspy/details', compact('ad','projects','remove'));
    }

    public function saveAd(Request $request){
        $allInputs = $request->all();
        $ad_id = $allInputs['page_id'].'_'.$allInputs['id'];
        $ad = Ads::where('ad_id', $ad_id)->first();
        if(!$ad){
            $ad = new Ads();
            $ad->ad_id = $ad_id;
        }
        $ad->data = json_encode($allInputs);
        $ad->save();
        return response()->json($ad);
    }

    public function redirectToFacebook()
    {
        $fb = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => env('FACEBOOK_API_VERSION'),
        ]);

        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email', 'user_gender']; // specify the permissions you need here

        $loginUrl = $helper->getLoginUrl(url('adspy/facebook2/callback'), $permissions);

        return redirect()->to($loginUrl);
    }

    // Adding project to my own list
    public function saveAdInProject(Request $request){
        $allInputs = $request->all();
        $project_name = $allInputs['project_name'];
        $project_id = $allInputs['project_id'];
        $adData = $allInputs['adData'];

        if($project_name){
            $project = Project::where(['name' => $project_name, 'user_id' => Auth::user()->id])->first();
            $project_id = isset($project) ? $project->id : '';
        }

        if(!$project_id){
            $project = new Project();
            $project->name = $project_name;
            $project->user_id = Auth::user()->id;
            $project->save();
            $project_id = $project->id;
        }

        $result = $this->saveAdToProject($project_id, $adData);
        $projects = Project::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        if($result){
            return response()->json([$projects, 'success' => 1]);
        }else{
            return response()->json([$projects, 'success' => 0]);
        }
    }

    // Saving ad to my project
    public function saveAdToProject($project_id, $adData){
        $ad_id = $adData['page_id'].'_'.$adData['id'];
        $ad = Ads::where(['ad_id' => $ad_id])->first();
        $user_id = Auth::user()->id;
        // if ad exists in database 
        
        if(!$ad){
            $ad = new Ads();
            $ad->ad_id = $ad_id;
            $ad->project_ids = $project_id;
            $ad->user_ids = Auth::user()->id;
        }else{
            // if ad exists in database but not in my project
            $project_ids_array = explode(",", $ad->project_ids);
            if (!in_array($project_id, $project_ids_array)) {
                $project_ids_array[] = $project_id;
            }
            $project_ids = implode(",", $project_ids_array);

            $user_ids_array = explode(",", $ad->user_ids);
            if (!in_array($user_id, $user_ids_array)) {
                $user_ids_array[] = $user_id;
            }
            $user_ids = implode(",", $user_ids_array);

            $ad->project_ids = trim($project_ids, ',');
            $ad->user_ids = trim($user_ids, ',');
        }
        
        $ad->data = json_encode($adData);
        return $ad->save();
        exit;
    }


    public function saveAdInProjectNew(Request $request){
        $allInputs = $request->all();
        $project_name = $allInputs['project_name'];
        $project_id = $allInputs['project_id']; 
        $ad_id = $allInputs['ad_id'];

        if($project_name){
            $project = Project::where(['name' => $project_name, 'user_id' => Auth::user()->id])->first();
            $project_id = isset($project) ? $project->id : '';
        }
        
        if(!$project_id){
            $project = new Project();
            $project->name = $project_name;
            $project->user_id = Auth::user()->id;
            $project->save();
            $project_id = $project->id;
        }
        $result = $this->saveAdToProjectNew($project_id, $ad_id);
        $projects = Project::where('user_id',Auth::user()->id)->orderBy('name', 'asc')->get();
        if($result){
            return response()->json([$projects, 'success' => 1]);
        }else{
            return response()->json([$projects, 'success' => 0]);
        }
    }

    public function saveAdToProjectNew($project_id, $ad_id){ 
        $user_id = Auth::user()->id;
        $ad = Ads::where(['ad_id' => $ad_id])->first();
        
        $project_ids_array = explode(",", $ad->project_ids);
        if (!in_array($project_id, $project_ids_array)) {
            $project_ids_array[] = $project_id;
        }
        $project_ids = implode(",", $project_ids_array);

        $user_ids_array = explode(",", $ad->user_ids);
        if (!in_array($user_id, $user_ids_array)) {
            $user_ids_array[] = $user_id;
        }
        $user_ids = implode(",", $user_ids_array);

        $ad->project_ids = trim($project_ids,',');
        $ad->user_ids = trim($user_ids,',');


        return $ad->save();
    }

    public function saveCurrentQuery(Request $request){
        $keyword = trim($request->search_terms);
        $query = $request->all();
        $user_id = Auth::user()->id;
        $query = Query::where(['user_id' => $user_id, 'keyword' => $keyword])->first();
        if(!$query){
            $query = new Query();
        }
        $query->user_id = $user_id;
        $query->keyword = $keyword;
        $query->query = json_encode($request->all());
        return $query->save();
    }
}

// link_url
// cta_text
// cta_type
// original_image_url
// page_like_count
// page_profile_uri
// link_description
// page_categories
// page_entity_type
// video_hd_url
// page_profile_picture_url
// video_preview_image_url

