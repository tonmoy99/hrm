<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmpPersonalInfo;
use App\EmpEducationalInfo;
use App\EmpPastProfessionInfo;
use App\EmpcontactInfo;
use App\EmpEmargencyContactInfo;
use App\EmploginInfo;
use App\Designation;
use App\Department;
use App\EmpOfficialInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\EmployeeAttendance;
use DB;

class EmployeeController extends Controller {

    public function index() {
	return view('frontEnd.employee(user-end).emp-registration');
    }

    public function create() {
	//
    }

    public function store(Request $request) {

//	=============Employee personal info===============

	$emp_personal = new EmpPersonalInfo();
	$emp_personal->emp_first_name = $request->emp_first_name;
	$emp_personal->emp_last_name = $request->emp_last_name;
	$emp_personal->emp_father_name = $request->emp_father_name;
	$emp_personal->emp_mother_name = $request->emp_mother_name;
	$emp_personal->nid = $request->nid;
	$emp_personal->emp_nationality = $request->emp_nationality;
	$emp_personal->emp_gender = $request->emp_gender;
	$emp_personal->emp_date_0f_birth = $request->emp_date_0f_birth;
	$emp_personal->emp_marital_status = $request->emp_marital_status;
	$emp_personal->emp_blood_group = $request->emp_blood_group;
	$emp_personal->save();

//	====================================================
//	=============Employee Educational info===============
	$emp_education = new EmpEducationalInfo();
	$emp_education->emp_id = $emp_personal->id;
	$emp_education->ed_year = json_encode($request->ed_year);
	$emp_education->ed_institute = json_encode($request->ed_institute);
	$emp_education->ed_department = json_encode($request->ed_department);
	$emp_education->ed_gpa_division = json_encode($request->ed_gpa_division);
	$emp_education->save();
//	======================================================
//	=============Employee Past Profesional info===============	
	$emp_past_profession = new EmpPastProfessionInfo();
	$emp_past_profession->emp_id = $emp_personal->id;
	$emp_past_profession->ex_institute = json_encode($request->ex_institute);
	$emp_past_profession->ex_duration = json_encode($request->ex_duration);
	$emp_past_profession->ex_department = json_encode($request->ex_department);
	$emp_past_profession->ex_position = json_encode($request->ex_position);
	$emp_past_profession->save();
//	======================================================
//	================Employee Contact Info=====================
	$emp_contact = new EmpcontactInfo();
	$emp_contact->emp_id = $emp_personal->id;
	$emp_contact->emp_phone = $request->emp_phone;
	$emp_contact->emp_email = $request->emp_email;
	$emp_contact->emp_district = $request->emp_district;
	$emp_contact->emp_city = $request->emp_city;
	$emp_contact->emp_village = $request->emp_village;
	$emp_contact->emp_street = $request->emp_street;
	$emp_contact->emp_postal_code = $request->emp_postal_code;
	$emp_contact->emp_house_no = $request->emp_house_no;
	$emp_contact->save();
//	======================================================
//	================Employee Emargency Contact Info=======
	$emp_emar_contact = new EmpEmargencyContactInfo();
	$emp_emar_contact->emp_id = $emp_personal->id;
	$emp_emar_contact->emargency_name = $request->emargency_name;
	$emp_emar_contact->emargency_email = $request->emargency_email;
	$emp_emar_contact->emargency_phone = $request->emargency_phone;
	$emp_emar_contact->emargency_address = $request->emargency_address;
	$emp_emar_contact->save();
//	======================================================
//	================Employee login Info=======	
	$emp_login = new EmploginInfo();
	$emp_login->emp_id = $emp_personal->id;
	$emp_login->emp_user_email = $request->emp_user_email;
	$emp_login->emp_password = bcrypt($request->emp_password);
	$emp_login->save();
//	======================================================	
	return "success";
    }

//	================Employee List=======
    public function manage() {
	$emp_name = EmpPersonalInfo::all();
	$emp_email = EmpcontactInfo::all();
	$emp_assign = EmpOfficialInfo::all();
	return view('admin.employee(admin-view).manage', compact('emp_name', 'emp_email', 'emp_assign'));
    }

//	======================================================    




    public function employee_assign_create(Request $request) {
	$emp_assign = EmpPersonalInfo::find($request->emp_id);
	$emp_dept = Department::all();
	$emp_post = Designation::all();

	return view('admin.employee(admin-view).emp_assign', compact('emp_assign', 'emp_dept', 'emp_post'));
    }

    public function employee_assign_store(Request $request) {
	$emp_assign = new EmpOfficialInfo();
	$emp_assign->emp_id = $request->emp_id;
	$emp_assign->emp_dept = $request->emp_dept;
	$emp_assign->emp_post = $request->emp_post;
	$emp_assign->joinig_date = $request->joinig_date;
	$emp_assign->save();
	return redirect()->route('employee_manage');
    }

    public function employee_profile_admin_view(Request $request) {
	$emp_id = $request->emp_id;
	$emp_personal = EmpPersonalInfo::where('id', $emp_id)->first();
	$emp_emargency = EmpEmargencyContactInfo::where('emp_id', $emp_id)->first();
	$emp_contact = EmpcontactInfo::where('emp_id', $emp_id)->first();
	$emp_edu = EmpEducationalInfo::where('emp_id', $emp_id)->first();
	$emp_past_experience = EmpPastProfessionInfo::where('emp_id', $emp_id)->first();
//	$emp_oficial = EmpOfficialInfo::where('emp_id', $emp_id)->first();
	return view('admin.employee(admin-view).employee-profile', compact('emp_personal', 'emp_emargency', 'emp_contact', 'emp_edu', 'emp_past_experience', 'emp_oficial'));
    }

    public function employee_login_show() {
	return view('frontEnd.employee(user-end).emp-login');
    }

    public function employee_login_process(Request $request) {
	$email = $request->emp_user_email;
	$password = $request->emp_password;

	$login_info = EmploginInfo::where('emp_user_email', $email)->first();
	$emp_id = $login_info->emp_id;
	$emp_personal_info = EmpPersonalInfo::where('id', $emp_id)->first();
	$emp_official_info = EmpOfficialInfo::where('emp_id', $emp_id)->first();

	if (count($login_info) > 0) {
	    if (Hash::check($password, $login_info->emp_password)) {
		Session :: put('email', $login_info->emp_user_email);
		Session :: put('emp_id', $login_info->emp_id);
		Session :: put('emp_name', $emp_personal_info->emp_first_name);
		Session :: put('login', TRUE);
		return redirect()->route('employee_profile_view');
	    }
	    return redirect()->route('employee_login_show')->with(' alert ', ' Password or Email, False! ');
	}
	return redirect()->route('employee_login_show')->with(' alert ', ' Password or Email, False! ');
    }

    public function employee_profile_view() {
	if (!Session :: get('login')) {
	    return redirect()->route('employee_login_show');
	} else {
	    return view('frontEnd.employee(user-end).emp-panel');
	}
    }

    public function emp_logout() {
	Session :: flush();
	return redirect()->route('employee_login_show')->with(' alert ', ' You have logged out ');
    }

    public function emp_arrival_time(Request $request) {
	date_default_timezone_set("Asia/Dhaka");
	$login_time = date("h:i:sa");
	$initial_time = '';
	$login_date = date("Y-m-d");
	$emp_id = $request->emp_id;
	$emp_personal_info = EmpPersonalInfo::where('id', $emp_id)->first();
	$emp_official_info = EmpOfficialInfo::where('emp_id', $emp_id)->first();
	$emp_attendance = new EmployeeAttendance();
	$emp_attendance->emp_id = $emp_personal_info->id;
	$emp_attendance->emp_first_name = $emp_personal_info->emp_first_name;
	$emp_attendance->emp_last_name = $emp_personal_info->emp_last_name;
	$emp_attendance->emp_dept = $emp_official_info->emp_dept;
	$emp_attendance->emp_post = $emp_official_info->emp_post;
	$emp_attendance->emp_arrival_time = $login_time;
	$emp_attendance->date = $login_date;
	$emp_attendance->emp_leaving_time = $initial_time;
	$emp_attendance->save();
    }

    public function emp_leaving_time(Request $request) {
	date_default_timezone_set("Asia/Dhaka");
	$logout_time = date("h:i:sa");
	$emp_id = $request->emp_id;
	DB::table('employee_attendances')
		->where('emp_id', $emp_id)
		->update(['emp_leaving_time' => $logout_time]);
    }

    public function employee_attendance_list() {
	$emp_attendance = EmployeeAttendance::all();
	return view('admin.employee(admin-view).emp_attendance_chart', compact('emp_attendance'));
    }

    public function emp_absent() {
	$emp_attendance = EmployeeAttendance::all();
	$emp_personal = EmpPersonalInfo::all();


	foreach ($emp_personal as $value) {
	    $value++;
	}

	foreach ($emp_attendance as $value_1) {
	    $value_1++;
	}

	foreach ($emp_personal as $value_3) {
	    if ($value_1->emp_id != $value->id) {
		$value_3 = $value->emp_first_name;
		
	    }
	    
	    
	}
	
	echo $value_3;
//	return view('admin.employee(admin-view).emp_absent_chart', compact('emp_attendance','emp_personal'));
    }
    
    
    public function emp_report(){
	$emp_info = EmpPersonalInfo::all();
	return view('admin.employee(admin-view).emp_report', compact('emp_info'));
    }

}
