@extends('frontEnd.layouts.master')


<div class="container">
    <div class="row">
	<div class="col-sm-12">

	    <div class="well">
		<h1>Welcome <br>{{Session::get('emp_name')}}</h1><br>

		<p>{{Session::get('emp_id')}}</p><br>
		<p>{{Session::get('email')}}</p><br>
		<p>{{Session::get('emp_dept')}}</p><br>
		<p>{{Session::get('login_time')}}</p><br>
		<p>{{Session::get('login_date')}}</p><br>
		
		<form action="{{route('employee_logout_process')}}" method="POST">
		    {{csrf_field()}}
		    <input type="submit" class="btn btn-info" value="logout">
		</form>



		<form action="{{route('emp_arrival_time')}}" method="POST">
		    {{csrf_field()}}
		    <input type="text"  value="{{Session::get('emp_id')}}" name="emp_id">
		    <button type="submit" class="btn btn-success">Arrival</button>
		</form>



		<form action="{{route('emp_leaving_time')}}" method="POST">
		    {{csrf_field()}}
		    <input type="text" value="{{Session::get('emp_id')}}" name="emp_id">
		    <button type="submit" class="btn btn-danger">Leave</button>
		</form>
	    </div>

	</div>

    </div>
</div>




