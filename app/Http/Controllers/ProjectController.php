<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Results;
use App\Models\Interest;
class ProjectController extends Controller
{ 

    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('interest/projects-list', ['projects' => $projects]);
    }

    public function addprojectlist(Request $request)
    {
        $validated = $request->validate([
            'previous_project' => 'required_without_all:name',
            'name' => 'required_without_all:previous_project',
            'project_details' => 'required',
        ]);
        $old_data = [];

        $project_id = $request->previous_project;

        if($project_id){
            $projects = Project::where(['id' => $project_id])->first();

            $old_data = json_decode($projects['details']);
            $newdata = array_merge($old_data,json_decode($request->project_details));
            $projects->details = $newdata; 
            $projects->save();
        }else{
            $projects = new Project();
            $projects->name = $request->name; 
            $projects->details = $request->project_details; 
            $projects->save();
        }
        
        return redirect()->route('projectlist');
    }

    public function projectsingle($id)
    {  
        $results = [];

       $all_results = Project::where(['id' => $id])->first();

      $results = $all_results['details'];

      $results = json_decode($results, true);
      
        $audience_size_modified = [];

        if (is_array($results))
        {

            foreach ($results as $data) {
                
                $data = json_decode($data);
                $data->addprojectlistaudience_size_lower_bound = $this->makeAudienceToKilloandMillion($data->audience_size_lower_bound);
                $data->audience_size_upper_bound = $this->makeAudienceToKilloandMillion($data->audience_size_upper_bound);
                $audience_size_modified[] = $data;
            }
        } 
        
        $results = $audience_size_modified;  

        $populars = [];
             
        $populars = Interest::orderBy('hit', 'desc')->take(9)->get();

        return view('interest/projects-list-details', ['results' => $results, 'populars' => $populars]);
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

    public function projectdelect($id)
    { 
        $project = Project::find($id); 
        $project->delete();

        return redirect()->back();

    }
}