@extends('layouts.adminMaster')

@section('title')
Add
@endsection




@section('content')

<div class="page-wrapper">
    <div class="row page-titles">
	<div class="col-md-5 align-self-center">
	    <h3 class="text-themecolor"></h3>
	</div>

	<div>
	    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>
    </div>
    <div class="container-fluid">
	<div class="row">
	    <div class="col-sm-12">
		<div class="card">
		    <div class="card-body">
			<h4 class="card-title">Add Job Vacancy</h4>
			<form action="{{route('job_list_store')}}" method="POST" class="form-material m-t-40 row">
			    {{csrf_field()}}
			    <div class="form-group col-md-12 m-t-20">
				<input type="text" name="job_title" class="form-control form-control-line" placeholder="Enter Job Title"> 
			    </div>

			    <div class="form-group col-md-12 m-t-20">
				<label>Job Responsibilities</label>
				<textarea name="job_respons" class="textarea_editor form-control" style="border: 1px solid #ededed; padding: 10px;" rows="10" placeholder="Enter text ..."></textarea>
			    </div>

			    <div class="form-group col-md-6 m-t-20">
				<label>Job Requirements</label>
				<textarea name="job_require" class="textarea_editor_1 form-control" style="border: 1px solid #ededed; padding: 10px;" rows="10" placeholder="Enter text ..."></textarea>
			    </div>

			    <div class="form-group col-md-6 m-t-20">
				<label>Additional Requirements</label>
				<textarea name="add_require" class="textarea_editor_2 form-control" style="border: 1px solid #ededed; padding: 10px;" rows="10" placeholder="Enter text ..."></textarea>
			    </div>

			    <div class="form-group col-md-6 m-t-20">
				<select class="form-control" name="job_type">
				    <option value="0">Job Type</option>
				    <option value="Full-time">Full-time</option>
				    <option value="Part-time">Part-time</option>
				    <option value="Intern">Intern</option>
				    <option value="Contructual">Contructual</option>
				</select>
			    </div>

			    <div class="form-group col-md-6 m-t-20">
				<select class="form-control" name="job_des_id">
				    <option value="">Job Designation</option>
				    @foreach($designations as $designation)
				    <option value="{{$designation->id}}">{{$designation->designation_name}}</option>
				    @endforeach
				    
				</select>
			    </div>

			    <div class="form-group col-md-12 m-t-20">
				<label>Location</label>
				<textarea name="job_location" class="textarea_editor_3 form-control" style="border: 1px solid #ededed; padding: 10px;" rows="10" placeholder="Enter text ..."></textarea>
			    </div>

			    <div class="form-group col-md-6 m-t-20">
				<label class="m-t-20"></label>
				<select class="form-control" name="status">
				    <option value="">Status</option>
				    <option value="1">Published</option>
				    <option value="0">Unpublished</option>
				</select>
			    </div>
			    <div class="col-md-6 form-material" style="margin-top: 4px; margin-bottom: 30px;">
				<label class="m-t-20">Deadline</label>
				<input type="date" class="form-control" id="mdate" name="job_dead_line">
			    </div>

			    <div class="form-actions col-md-8 col-md-offset-2 form-material" style="width: 70%; margin: auto; ">
				<button type="submit" class="btn btn-success btn-block"> <i class="fa fa-check"></i> Save</button>
			    </div>

			</form>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>
@endsection