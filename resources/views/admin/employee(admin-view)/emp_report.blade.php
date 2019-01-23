@extends('layouts.adminMaster')

@section('title')
Employee Report
@endsection


@section('content')
<div class="page-wrapper">
    <div class="container-fluid">

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
	<div class="col-12">
	    <div class="card">
		<div class="card-body">
		    <h4 class="card-title">Different Widths</h4>
		    <h6 class="card-subtitle">Just add <code>col*</code> class to form-group</h6>
		    <form class="form-material m-t-40 row">
			
			<div class="form-group col-md-2 m-t-20">
			    <select class="form-control">
				<option>Department</option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
			    </select>
			</div>
			
			<div class="form-group col-md-2 m-t-20">
			    <select class="form-control">
				<option>Designation</option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
			    </select>
			</div>
			
			
			<div class="form-group col-md-2 m-t-20">
			    <select class="form-control">
				<option>Employee</option>
				@foreach($emp_info as $emp_info)
				<option value="{{$emp_info->id}}">{{$emp_info->emp_first_name}}</option>
				@endforeach
			    </select>
			</div>
			
			
			<div class="form-group col-md-2 m-t-20">
			    <label></label>
			    From<input type="date">
			</div>
			
			<div class="form-group col-md-2 m-t-20">
			    <label></label>
			    To<input type="date">
			</div>
			
			
			
			<div class="form-group col-md-2 m-t-20">
			    <button type="submit" class="btn btn-success">Submit</button>
			</div>
		    </form>
		</div>
	    </div>
	</div>
    </div>
</div>
</div>


@endsection