<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//==============Vacancy & Candidate Application================
Route::get('/', 'VacancyController@index');
Route::post('candidate-form/create', 'VacancyController@create')->name('candidate_form_create');
Route::post('candidate-form/store', 'VacancyController@store')->name('candidate_form_store');
Route::get('candidate-form/manage', 'VacancyController@candidate_list_show')->name('candidate_form_manage');
Route::post('candidate-profile/view', 'VacancyController@profile_view')->name('candidate_profile');
Route::post('candidate-profile/destroy', 'VacancyController@destroy')->name('candidate_destroy');
Route::post('candidate-profile/accept', 'VacancyController@candidate_accept')->name('candidate_accept');



//==============Job Designation================
Route::get('job_designation/manage', 'JobDesignationController@index')->name('designation_manage');
Route::get('job_designation/add', 'JobDesignationController@create')->name('designation_add');
Route::post('job_designation/store', 'JobDesignationController@store')->name('designation_store');
Route::post('job_designation/published', 'JobDesignationController@published')->name('designation_published');
Route::post('job_designation/unpublished', 'JobDesignationController@unpublished')->name('designation_unpublished');
Route::post('job_designation/destroy', 'JobDesignationController@destroy')->name('designation_destroy');
Route::post('job_designation/edit', 'JobDesignationController@edit')->name('designation_edit');
Route::post('job_designation/update', 'JobDesignationController@update')->name('designation_update');



//==============Job list================
Route::get('job_list/manage', 'JobListController@index')->name('job_list_manage');
Route::get('job_list/add', 'JobListController@create')->name('job_list_add');
Route::post('job_list/store', 'JobListController@store')->name('job_list_store');
Route::post('job_list/published', 'JobListController@published')->name('joblist_unpublished');
Route::post('job_list/unpublished', 'JobListController@unpublished')->name('joblist_published');
Route::post('job_list/edit', 'JobListController@edit')->name('joblist_edit');
Route::post('job_list/update', 'JobListController@update')->name('joblist_update');
Route::post('job_list/destroy', 'JobListController@destroy')->name('joblist_destroy');


//==============Department==================

Route::get('department/manage', 'DepartmentController@index')->name('department_manage');
Route::get('department/add', 'DepartmentController@create')->name('department_add');
Route::post('department/store', 'DepartmentController@store')->name('department_store');
Route::post('department/published', 'DepartmentController@published')->name('department_published');
Route::post('department/unpublished', 'DepartmentController@unpublished')->name('department_unpublished');
Route::post('department/destroy', 'DepartmentController@destroy')->name('department_destroy');
Route::post('department/edit', 'DepartmentController@edit')->name('department_edit');
Route::post('department/update', 'DepartmentController@update')->name('department_update');


//==============Employee(user-view)==================

Route::get('employee/registration', 'EmployeeController@index')->name('employee_registration');
Route::post('employee/store', 'EmployeeController@store')->name('employee_store');
Route::get('employee/user-login-show', 'EmployeeController@employee_login_show')->name('employee_login_show');
Route::post('employee/user-login-process', 'EmployeeController@employee_login_process')->name('employee_login_process');
Route::get('employee/profile/user-view', 'EmployeeController@employee_profile_view')->name('employee_profile_view');
Route::post('employee/user-logout-process', 'EmployeeController@emp_logout')->name('employee_logout_process');
Route::post('employee/arrival-time','EmployeeController@emp_arrival_time')->name('emp_arrival_time');
Route::post('employee/leaving-time','EmployeeController@emp_leaving_time')->name('emp_leaving_time');




//==============Employee(admin-view)==================
Route::get('employee/manage', 'EmployeeController@manage')->name('employee_manage');
Route::post('employee/assign/create', 'EmployeeController@employee_assign_create')->name('employee_assign_create');
Route::post('employee/assign/store', 'EmployeeController@employee_assign_store')->name('employee_assign_store');
Route::post('employee/profile/admin-view', 'EmployeeController@employee_profile_admin_view')->name('employee_profile_admin_view');
Route::get('employee/attendance-list', 'EmployeeController@employee_attendance_list')->name('employee_attendance_list');
Route::get('employee/absent-employees', 'EmployeeController@emp_absent')->name('emp_absent_list');
Route::get('employee/report', 'EmployeeController@emp_report')->name('emp_report');


















