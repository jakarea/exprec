<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Keyword;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{

    public function searchuser(Request $request){ 
  
        $access_token = 'EAAFhbhyZBEUwBAAvepri4O0icmbtrrHxiW6AZA6ZBglEnARMAJXFK8bjytZCEalHhiOY6JIZBnWWzKkkoJieuSxGOzCPmBQyZBP5m7MNVKhs86NGN8o2RbjNmld4GTgNXZC06z7wLZCKo5hMJmZCMnIcxcBTyFRylqUIF0tjlf9MR70AgypybdghZBCcaOs5XNrrMZD';

        $search_data = null;
 
            if(isset($_GET['keyword'])){
                // return redirect()->back()->with('error', 'Please enter a keyword');

            $api_url = 'https://graph.facebook.com/search?type=adinterest&q=' . $request->keyword . '&limit=10000' . '&access_token=' . $access_token;

            return $search_data = Http::get($api_url); 

            $audience_size_modified = [];
            foreach ($search_data['data'] as $data) {
                $data['audience_size_lower_bound'] = $this->makeAudienceToKilloandMillion($data['audience_size_lower_bound']);
                $data['audience_size_upper_bound'] = $this->makeAudienceToKilloandMillion($data['audience_size_upper_bound']);
                $audience_size_modified[] = $data;
            }
            $search_data = $audience_size_modified; 
            }
        
        return view('interest/index');
    }
}


