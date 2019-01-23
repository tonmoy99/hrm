@extends('frontEnd.layouts.master')

@section('title')
Career
@endsection

@section('content')


<div class="container">
    <div class="row">
	<div class="col-sm-8 col-sm-offset-2">

	    <div class="well">
		<form action="{{route('candidate_form_create')}}" method="POST">
		    {{csrf_field()}}
		    <div class="jumbotron">
			<h1 class="text-center">Job Vacancy</h1>
		    </div>
		    @foreach($job_lists as $job_list)
		    @if($job_list->status == 1)
		    <div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">{{$job_list->job_title}}</div>

		    </div>

		    <div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Job Responsibilities</div>
			<div class="panel-body">
			    <?php
			    echo $job_list->job_respons;
			    ?>

			</div>
		    </div>

		    <div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Job Requirements</div>
			<div class="panel-body">
			    <?php
			    echo $job_list->job_require;
			    ?>
			</div>
		    </div>

		    <div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Additional Requirements</div>
			<div class="panel-body">
			    <?php
			    echo $job_list->add_require;
			    ?>
			</div>
		    </div>

		    <div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Job Type</div>
			<div class="panel-body">
			    {{$job_list->job_type}}
			</div>
		    </div>

		    <div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Location</div>
			<div class="panel-body">
			    <?php
			    echo $job_list->job_location;
			    ?>
			</div>
		    </div>

		    <div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Deadline</div>
			<div class="panel-body">
			    {{$job_list->job_dead_line}}
			</div>
		    </div>
		    <input type="hidden" value="{{$job_list->job_des_id}}" name="job_des_id">
		    <button type="submit" class="btn btn-success btn-block " style="height: 50px; font-size: 20px; font-weight: bold;"> <i class="fa fa-check"></i> Apply</button>
		    @endif
		    @endforeach
		    
		</form>
	    </div>

	</div>
    </div>
</div>

@endsection