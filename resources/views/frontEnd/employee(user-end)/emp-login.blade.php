@extends('frontEnd.layouts.master')



@section('content')
<div class="container">
    <div class="row">

	<div class="col-sm-6 col-sm-offset-3" style="margin-top: 50px;">
	    <div class="well">
	    <h3>Employee Login</h3>

	    @if (\Session :: has ('alert'))
	    <div  class = " alert alert-danger " >
		<div> {{ Session :: get ('alert') }} </div>
	    </div >
            @endif
            @if (\Session :: has ('alert-success'))
	    <div  class = " alert alert-success ">
		<div> {{ Session :: get ('alert-success ')}} </div>
	    </div>
            @endif

	    <form action="{{route('employee_login_process')}}" method="POST">
		{{csrf_field()}}
		<div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input name="emp_user_email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input name="emp_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-success">Login</button>

		<a href="{{route('employee_registration')}}" class="btn btn-info">Register</a>
	    </form>
	</div>
	</div>

	
    </div>
</div>
    <p>{{Session::get('logout_time')}}</p><br>
    <p>{{Session::get('logout_date')}}</p><br>



@endsection