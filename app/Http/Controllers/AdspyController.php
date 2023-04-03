<?php

namespace App\Http\Controllers;

use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Facebook\Facebook;

class AdspyController extends Controller
{
    protected $access_token;

    public function __construct()
    {
        $this->access_token = env('FACEBOOK_ACCESS_TOKEN');
    }

    public function index()
    {
        return view('adspy/index');
    }

    public function facebook()
    {
        return view('adspy/facebook');
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
            $limit = 6;
            $api_url = 'https://graph.facebook.com/v16.0/ads_archive?fields=id,page_id,page_name,ad_creative_bodies,languages,currency,spend,bylines,publisher_platforms,impressions,estimated_audience_size,demographic_distribution,ad_snapshot_url,ad_creation_time,ad_creative_link_captions,ad_creative_link_descriptions,ad_creative_link_titles,ad_delivery_start_time,ad_delivery_stop_time,delivery_by_region&'.$queryString.'&limit='.$limit.'&access_token='.$this->access_token;
            if($nextPage){
                $api_url = $nextPage;
            }
            $results = Http::get($api_url); 
            $uniqueAds = array();
            foreach ($results['data'] as $ad) {
                $exists = false;
                foreach ($uniqueAds as $uniqueAd) {
                    if ($uniqueAd["page_id"] == $ad["page_id"] && $uniqueAd["ad_delivery_start_time"] == $ad["ad_delivery_start_time"] && 
                        (isset($uniqueAd["ad_delivery_stop_time"]) && isset($ad["ad_delivery_stop_time"]) && $uniqueAd["ad_delivery_stop_time"] == $ad["ad_delivery_stop_time"]) ) {
                        $exists = true;
                        break;
                    }
                }
                if (!$exists) {
                    $uniqueAds[] = $ad;
                }
            }

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
        return view('adspy/mylist');
    }
    public function details()
    {
        return view('adspy/details');
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

    public function facebookCallback()
    {
        $fb = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => env('FACEBOOK_API_VERSION'),
        ]);

        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch (FacebookSDKException $e) {
            // handle errors here
        }

        if (!isset($accessToken)) {
            // handle errors here
        }

        $oAuth2Client = $fb->getOAuth2Client();
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);

        $tokenMetadata->validateExpiration();

        try {
            $response = $fb->get('/me?fields=id,name,email,gender', $accessToken);
        } catch (FacebookSDKException $e) {
            // handle errors here
        }

        $user = $response->getGraphUser();

        // do something with the user's information, like create a new user record in your database

        return redirect()->to('/home');
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
