<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Designation;
use App\Department;

class JobDesignationController extends Controller {

    public function index() {
	$designations = Designation::all();
	$departments = Department::all();
	return view('admin.job.job_designation.manage', compact('designations', 'departments'));
    }

    public function create() {
	$departments = Department::all();
	return view('admin.job.job_designation.add', compact('departments'));
    }

    public function store(Request $request) {
	$designation = new Designation();
	$designation->designation_name = $request->designation_name;
	$designation->dept_id = $request->dept_id;
	$designation->status = $request->status;
	$designation->save();
	return redirect()->route('designation_manage');
    }

    public function published(Request $request) {
	$designation = Designation::find($request->designation_id);
	$designation->status = 1;
	$designation->save();
	return redirect()->route('designation_manage');
    }

    public function unpublished(Request $request) {
	$designation = Designation::find($request->designation_id);
	$designation->status = 0;
	$designation->save();
	return redirect()->route('designation_manage');
    }

    public function edit(Request $request) {
	$designation = Designation::find($request->designation_id);
	return view('admin.job.job_designation.edit', compact('designation'));
    }

    public function update(Request $request) {
	$designation = Designation::find($request->designation_id);
	$designation->designation_name = $request->designation_name;
	$designation->save();
	return redirect()->route('designation_manage');
    }

    public function destroy(Request $request) {
	$designation = Designation::find($request->designation_id);
	$designation->delete();
	return redirect()->route('designation_manage');
    }

}
