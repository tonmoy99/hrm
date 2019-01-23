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
			<h4 class="card-title">Edit Designation</h4>

			<form action="{{route('designation_update')}}" method="POST" class="form-material m-t-40">
			    {{csrf_field()}}
			    
			    <div class="form-group">
				<input name="designation_name" type="text" value="{{$designation->designation_name}}" class="form-control form-control-line" placeholder="Enter Designation"> 
				<input type="hidden" name="designation_id" value="{{$designation->id}}">
			    </div>
			    
			    <div class="form-actions">
				<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
				
			    </div>

			</form>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>
@endsection