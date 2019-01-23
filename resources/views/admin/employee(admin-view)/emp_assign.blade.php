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
	    <div class="col-sm-8 col-sm-offset-2">
		<div class="card">
		    <div class="card-body">
			<h4 class="card-title">Add Designation</h4>

			<form action="{{route('employee_assign_store')}}" method="POST" class="form-material m-t-40">
			    {{csrf_field()}}
			    
			    <input type="hidden" value="{{$emp_assign->id}}" name="emp_id">
			    <div class="form-group">
				<input readonly="" value="{{$emp_assign->emp_first_name}}&nbsp;{{$emp_assign->emp_last_name}}" name="designation_name" type="text" class="form-control form-control-line" placeholder="Enter Designation"> 
			    </div>
				
			    	
			    
			    <select class="form-control" name="emp_dept" style="margin-bottom: 30px;">
				<option>Select Department</option>
				@foreach($emp_dept as $emp_dept)
				<option value="{{$emp_dept->department_name}}">{{$emp_dept->department_name}}</option>
				@endforeach
			    </select>
			    
			    
			    <select class="form-control" name="emp_post" style="margin-bottom: 30px;">
				<option>Select Designation</option>
				@foreach($emp_post as $emp_post)
				<option value="{{$emp_post->designation_name}}">{{$emp_post->designation_name}}</option>
				@endforeach
			    </select>
			    
			    <div class="form-actions" style="margin-bottom: 30px;">
				<label class="m-t-20">Joining Date</label>
				<input type="date" class="form-control" id="mdate" name="joinig_date">
			    </div>
			    
			    <div class="form-actions">
				<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Save</button>
			    </div>

			</form>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>
@endsection