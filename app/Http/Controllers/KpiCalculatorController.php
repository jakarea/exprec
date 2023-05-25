<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\KpiCalculator;

class KpiCalculatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function calculator()
    {
        $data = '';
        $projects = Project::where('user_id',Auth()->user()->id)->orderBy('id', 'desc')->get();
        return view('calculator/index',compact('projects','data'));
    }

    public function singleKpiData($pid, $kpiId){
        $projects = Project::where('user_id',Auth()->user()->id)->orderBy('id', 'desc')->get();
        $kpi = KpiCalculator::where(['id' => $kpiId,'project_id' => $pid, 'user_id' => Auth::user()->id])->first();
        $data = $kpi->data;
        if(!$kpi){
            return redirect()->route('kpiCalculator');
        }
        return view('calculator/index',compact('projects','data'));
    }

    public function saveCalculateData(Request $request){

        $validated = $request->validate([
            'previous_project' => 'required_without_all:name',
            'name' => 'required_without_all:previous_project',
            'data' => 'required',
        ],[
            'project_details.required' => 'Selection interest cant be empty',
            'previous_project.required' => 'Please select or insert a new project name',
        ]);
        $data = $request->data;
        $project_id = $request->previous_project;

        if(!$project_id){
            $project = Project::create([
                'user_id' => Auth()->user()->id,
                'name' => $request->name,
            ]);
            $project_id = $project->id;
        }
        $kpiCalculator = KpiCalculator::create([
            'user_id' => Auth()->user()->id,
            'project_id' => $project_id,
            'data' => json_encode($data),
        ]);

        if($kpiCalculator && $project_id){
            return response()->json(['success' => true, 'message' => 'Your data has been saved successfully!']);
        }else{
            return response()->json(['success' => false, 'message' => 'Something went wrong!']);
        }
    }
}
