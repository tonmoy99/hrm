@extends('layouts.adminMaster')

@section('title')
Manage
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
    <div class="container">
	<div class="row">
	    <div class="col-sm-12">
		<div class="card">
		    <div class="card-body">
			<h6 class="card-subtitle"></h6>
			<div class="table-responsive">
			    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
				<thead>

				    <tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Department</th>
					<th>Post</th>
					<th>Action</th>
				    </tr>
				</thead>
				<tbody>
				    
				    @foreach($emp_name as $key => $e_name)
				    
				    
				    <tr>
					
					<td><?php echo $key+1;?></td>
					<td>{{$e_name->emp_first_name}}&nbsp;{{$e_name->emp_last_name}}</td>
					
					
				  
					@foreach($emp_email as $key => $e_email)
					<td>{{$e_email->emp_email}}</td>
					@endforeach
					
					    
					    
					    
					
					    
					    
					
			
					<td>
					    <form action="{{route('employee_profile_admin_view')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$e_name->id}}" name="emp_id">
						<button title="view profile" type="submit" class="btn btn-success" aria-haspopup="true" aria-expanded="false">
						    <i class="fa fa-eye" aria-hidden="true"></i>
						</button>
					    </form>
					 
					    <form action="{{route('employee_assign_create')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$e_name->id}}" name="emp_id">
						<button type="submit" class="btn btn-linkedin" aria-haspopup="true" aria-expanded="false">
						    <i class="fa fa-pencil-square" aria-hidden="true"></i>
						</button>
					    </form>
					    
					    
					    
<!--					    <form action="" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$e_name->id}}" name="emp_id">
						<button type="submit" class="btn btn-inverse" aria-haspopup="true" aria-expanded="false">
						    <i class="fa fa-edit" aria-hidden="true"></i>
						</button>
					    </form>-->
					</td>
				    </tr>

				    
				   
				    @endforeach
				</tbody>
				<tfoot>
				    <tr>
					<td colspan="2">
					    <!--<button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>-->
					</td>

					<td colspan="7">
					    <div class="text-right">
						<ul class="pagination"> </ul>
					    </div>
					</td>
				    </tr>
				</tfoot>
			    </table>
			</div>


		    </div>
		</div>
	    </div>
	</div>
    </div>

</div>


@endsection