<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobList;
use App\Designation;

class JobListController extends Controller
{
    
    public function index(){
	$joblists = JobList::all();
	$designations = Designation::all();
	return view('admin.job.job_posting.manage', compact('joblists','designations' ));
    }
    
    public function create(){
	$designations = Designation::where('status', 1)->get();
	return view('admin.job.job_posting.add', compact('designations'));
    }
    
    public function store(Request $request){
	$job_list = new JobList();
	$job_list->job_title = $request->job_title;
	$job_list->job_respons = $request->job_respons;
	$job_list->job_require = $request->job_require;
	$job_list->add_require = $request->add_require;
	$job_list->job_type = $request->job_type;
	$job_list->job_des_id = $request->job_des_id;
	$job_list->job_location = $request->job_location;
	$job_list->status = $request->status;
	$job_list->job_dead_line = $request->job_dead_line;
	$job_list->save();
	return redirect()->route('job_list_manage');
    }
    
    
    public function published(Request $request) {
	$job_list = JobList::find($request->job_list_id);
	$job_list->status = 1;
	$job_list->save();
	return redirect()->route('job_list_manage');
    }

    public function unpublished(Request $request) {
	$job_list = JobList::find($request->job_list_id);
	$job_list->status = 0;
	$job_list->save();
	return redirect()->route('job_list_manage');
    }
    
    public function show($id)
    {
        
    }

    public function edit(Request $request)
    {
	$designations = Designation::where('status', 1)->get();
        $joblist = JobList::find($request->job_list_id);
	return view('admin.job.job_posting.edit', compact('joblist', 'designations'));
    }

    
    public function update(Request $request)
    {
        $job_list = JobList::find($request->job_list_id);
	$job_list->job_title = $request->job_title;
	$job_list->job_respons = $request->job_respons;
	$job_list->job_require = $request->job_require;
	$job_list->add_require = $request->add_require;
	$job_list->job_type = $request->job_type;
	$job_list->job_des_id = $request->job_des_id;
	$job_list->job_location = $request->job_location;
	$job_list->status = $request->status;
	$job_list->job_dead_line = $request->job_dead_line;
	$job_list->save();
	return redirect()->route('job_list_manage');
    }

    
    public function destroy(Request $request)
    {
        $joblist = JobList::find($request->job_list_id);
	$joblist->delete();
	return redirect()->route('job_list_manage');
    }
}
