<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobList;
use App\Candidate;
use App\Designation;

class VacancyController extends Controller
{
    
    public function index()
    {
	$job_lists = JobList::all();
        return view('frontEnd.general.career', compact('job_lists'));
    }

    
    public function create(){
	return view('frontEnd.general.candidate-form', compact('candidates'));
    }
    

    
    public function store(Request $request){
	$candidates = new Candidate();
	$candidates->candidate_name = $request->candidate_name;
	$candidates->job_post_id = $request->job_post_id;
	$candidates->candidate_email = $request->candidate_email;
	$candidates->candidate_phone = $request->candidate_phone;
	$candidates->ed_year = json_encode($request->ed_year);
	$candidates->ed_institute = json_encode($request->ed_institute);
	$candidates->ed_department = json_encode($request->ed_department);
	$candidates->ed_gpa_division = json_encode($request->ed_gpa_division);
	$candidates->ex_institute = json_encode($request->ex_institute);
	$candidates->ex_duration = json_encode($request->ex_duration);
	$candidates->ex_department = json_encode($request->ex_department);
	$candidates->ex_position = json_encode($request->ex_position);
	$candidates->candidate_present_address = $request->candidate_present_address;
	$candidates->candidate_parmanent_address = $request->candidate_parmanent_address;
	$candidates->expected_salary = $request->expected_salary;
	$candidates->status = $request->status;
	
	$CV = $request->file('CV');
	if ($CV) {
	    $file_size = $CV->getClientSize();
	    $name = str_random(20);
	    $extension = $CV->getClientOriginalExtension();
	    $file_name = $name . '.' . $extension;
	    $upload_path = 'public/cv';
	    //-------- Check image format ----------//
	    if ($extension == 'doc' || $extension == 'docx' || $extension == 'pdf') {
		//------ Check file size --------//
		if ($file_size < 512000) {
		    $success = $CV->move($upload_path, $file_name);
		    $candidates['CV'] = $file_name;
		    $result = $candidates->save();;
		} else {
		    return 'Maximum file size is 500KB';
		}
	    } else {
		return 'File type not supported';
	    }
	} else {
	    $result = $candidates->save();
	}
	
	
	if($result){
            return 'Saved SLider Successfully';
        }else{
           return 'Something Went Wrong'; 
        }
    }
    
    
    public function candidate_list_show(){
	$candidates = Candidate::all();
	$designations = Designation::all();
	return view('admin.candidate.manage', compact('candidates', 'designations'));
    }
    
//    public function shortlist_show(){
//	$candidates = Candidate::all();
//	$designations = Designation::all();
//	return view('admin.candidate.shortlist', compact('candidates', 'designations'));
//    }
    
//    public function candidate_accept(Request $request){
//	$candidate = Candidate::find($request->candidate_id);
//	$candidate->candidate_id = $request->candidate_id;
//	
//    }




    public function profile_view(Request $request){
	$candidates = Candidate::find($request->candidate_id);
	return view('admin.candidate.candidate-profile', compact('candidates'));
    }


 
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
	$candidate = Candidate::find($request->candidate_id);
	$candidate->delete();
	return redirect()->route('candidate_form_manage');
    }
    
        
    
}
