<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    
    public function index(){
	$departments = Department::all();
        return view('admin.job.department.manage', compact('departments'));
    }
    

    public function create(){
	return view('admin.job.department.add');
    }
    
    
    public function store(Request $request){
	$department = new Department();
	$department->department_name = $request->department_name;
	$department->status = $request->status;
	$department->save();
	return redirect()->route('department_manage');
    }
    
    
    
    public function published(Request $request) {
	$department = Department::find($request->department_id);
	$department->status = 1;
	$department->save();
	return redirect()->route('department_manage');
    }
    
    
    public function unpublished(Request $request) {
	$department = Department::find($request->department_id);
	$department->status = 0;
	$department->save();
	return redirect()->route('department_manage');
    }

    
    public function show()
    {
        
	
    }

    
    public function edit(Request $request){
	$departments = Department::find($request->department_id);
        return view('admin.job.department.edit', compact('departments'));
    }
    
    public function update(Request $request){
	$departments = Department::find($request->department_id);
	$departments -> department_name = $request->department_name;
	$departments -> save();
	return redirect()->route('department_manage');
    }
    

    public function destroy(Request $request){
	$department = Department::find($request->department_id);
	$department->delete();
	return redirect()->route('department_manage');
    }
    
}
