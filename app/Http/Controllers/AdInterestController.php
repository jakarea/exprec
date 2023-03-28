<?php

namespace App\Http\Controllers;

use DB; 
use App\Models\Project;
use App\Models\Interest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AdInterestController extends Controller
{
    protected $access_token;

    public function __construct()
    {
        $this->access_token = env('FACEBOOK_ACCESS_TOKEN');
    }

    public $wordsArray = [];
    public $topicsArray = [];

    public function adInterest(Request $request){

        $q = null;
        $size = 0;
        $access_token = env('FACEBOOK_ACCESS_TOKEN');

        $results = [];

            if(isset($_GET['q'])){

                if($request->q == null)
                return redirect()->back()->with('error', 'Please enter a keyword');

                $data = Interest::where([
                    'keyword' => $request->q
                ])->first();
    
                if ($data) {
                    Interest::where([
                        'id' => $data->id,
                    ])
                    ->update([
                        'hit' => $data->hit + 1
                    ]);
                } else {
                    Interest::create([
                        'keyword' => $request->q
                    ]);
                }
                
                $q = $_GET['q'];
                $api_url = 'https://graph.facebook.com/search?type=adinterest&q=' . $q . '&locale=nl_NL&limit=1000' . '&access_token=' . $this->access_token;
                $results = Http::get($api_url); 
                //$results = json_decode('{"data":[{"id":"6003166444958","name":"Dhaka","audience_size_lower_bound":44629600,"audience_size_upper_bound":52484410,"path":["Interests","Additional interests","Dhaka"],"description":null,"topic":"Travel, places and events"},{"id":"6003313479959","name":"Dhaka Division","audience_size_lower_bound":8645144,"audience_size_upper_bound":10166690,"path":["Interests","Additional interests","Dhaka Division"],"description":null,"topic":"Travel, places and events"},{"id":"6003166956668","name":"Dhaka District","audience_size_lower_bound":6251003,"audience_size_upper_bound":7351180,"path":["Interests","Additional interests","Dhaka District"],"description":null,"disambiguation_category":"County","topic":"Travel, places and events"},{"id":"6003970901896","name":"University of Dhaka","audience_size_lower_bound":5886938,"audience_size_upper_bound":6923040,"path":["Interests","Additional interests","University of Dhaka"],"description":null,"disambiguation_category":"College & university","topic":"Education"},{"id":"6009147759258","name":"DhakaFM 90.4","audience_size_lower_bound":1496224,"audience_size_upper_bound":1759560,"path":["Interests","Additional interests","DhakaFM 90.4"],"description":null,"disambiguation_category":"Radio station","topic":"News and entertainment"},{"id":"6013016685505","name":"The Dhaka Times","audience_size_lower_bound":518163,"audience_size_upper_bound":609360,"path":["Interests","Additional interests","The Dhaka Times"],"description":null,"disambiguation_category":"Newspaper","topic":"News and entertainment"},{"id":"6002990551594","name":"Oxford International School, Dhaka","audience_size_lower_bound":93341,"audience_size_upper_bound":109770,"path":["Interests","Additional interests","Oxford International School, Dhaka"],"description":null,"disambiguation_category":"High School","topic":"News and entertainment"},{"id":"6003527634198","name":"Dhaka University of Engineering & Technology, Gazipur","audience_size_lower_bound":60476,"audience_size_upper_bound":71120,"path":["Interests","Additional interests","Dhaka University of Engineering & Technology, Gazipur"],"description":null,"disambiguation_category":"College & university","topic":"Education"},{"id":"6003401344547","name":"International School Dhaka","audience_size_lower_bound":50697,"audience_size_upper_bound":59620,"path":["Interests","Additional interests","International School Dhaka"],"description":null,"disambiguation_category":"Junior High School","topic":"Business and industry"},{"id":"6003654539878","name":"Ahsanullah University of Science and Technology","audience_size_lower_bound":275994,"audience_size_upper_bound":324570,"path":["Interests","Additional interests","Ahsanullah University of Science and Technology"],"description":null,"disambiguation_category":"College & university","topic":"Education"}]}', true);
                $audience_size_modified = [];
               
                foreach ($results['data'] as $data) {
                    $skip = array("#", "'", ";",",","and","the", "are","&",".","(",")","{","}"."[","]",1,2,3,4,5,6,7,8,9,0);
            
                    if(isset($data['name']) ){
                        $this->countWordFrequency(str_replace( $skip, '', $data['name']));
                    }
                    
                    if(isset($data['topic'])){
                        $this->countTopicFrequency($data['topic']);
                    }

                    $data['audience_size_lower_bound'] = $this->makeAudienceToKilloandMillion($data['audience_size_lower_bound']);
                    $data['audience_size_upper_bound'] = $this->makeAudienceToKilloandMillion($data['audience_size_upper_bound']);
                    $audience_size_modified[] = $data;
                }
               $results = $audience_size_modified;
            }

            $populars = [];
            $populars = Interest::orderBy('hit', 'desc')->take(9)->get();
 
            $size = count($results);

            $projects = Project::orderBy('id', 'desc')->get();
            $words = $this->wordsArray;
            arsort($words);
            $words = array_slice($words, 0, 9);

            $topics = $this->topicsArray;
            arsort($topics);
            $topics = array_slice($topics, 0, 9);

        return view('interest/index', compact('results','size','q','populars','projects','words','topics'));
    }


    public function makeAudienceToKilloandMillion($audienceNumber)
    {
        if ($audienceNumber > 999 && $audienceNumber <= 999999) {
            $result = round(($audienceNumber / 1000), 2) . ' K';
        } elseif ($audienceNumber > 999999) {
            $result = round(($audienceNumber / 1000000), 2) . ' M';
        } else {
            $result = $audienceNumber;
        }
        return $result;
    }

    public function countWordFrequency($words){
        $wordArray = array_filter(explode(' ', $words));
        foreach($wordArray as $word){
            if(strlen($word) > 2){
                if(array_key_exists($word, $this->wordsArray)){
                    $this->wordsArray[$word] = $this->wordsArray[$word] + 1;
                }else{
                    $this->wordsArray[$word] = 1;
                }
            }
        }
    }

    public function countTopicFrequency($topic){
        if(strlen($topic) > 2){
            if(array_key_exists($topic, $this->topicsArray)){
                $this->topicsArray[$topic] = $this->topicsArray[$topic] + 1;
            }else{
                $this->topicsArray[$topic] = 1;
            }
        }
    }
}