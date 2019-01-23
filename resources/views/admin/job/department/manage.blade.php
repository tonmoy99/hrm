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
			<h4 class="card-title">Department list</h4>
			<h6 class="card-subtitle"></h6>
			<div class="table-responsive">
			    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
				<thead>
				    <tr>
					<td colspan="2">
					    <a href="{{route('department_add')}}" class="btn btn-info btn-rounded" data-target="#add-contact">Add Department</a>
					</td>
				    </tr>
				    <tr>
					<th>No</th>
					<th>Department</th>
					<th>Status</th>
					<th>Action</th>
				    </tr>
				</thead>
				<tbody>
				    @foreach($departments as $key => $department)
				    <tr>
					<td><?php echo $key + 1; ?></td>

					<td>{{$department->department_name}}</td>

					<td>
					    @if($department->status == 1)
					    <form action="{{route('department_unpublished')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$department->id}}" name="department_id">
						<button type="submit" class="btn btn-success">Published</button>
					    </form>
					    @else
					    <form action="{{route('department_published')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$department->id}}" name="department_id">
						<button type="submit" class="btn btn-warning">Unpublished</button>
					    </form>
					    @endif
					</td>

					<td>
					    <form action="{{route('department_edit')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$department->id}}" name="department_id">
						<button type="submit" class="btn btn-info" aria-haspopup="true" aria-expanded="false">
						    <i class="ti-settings"></i>
						</button>
					    </form>

					    <form action="{{route('department_destroy')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$department->id}}" name="department_id">
						<button type="submit" class="btn btn-danger" aria-haspopup="true" aria-expanded="false" onclick="return confirm('Are you sure???');">
						    <i class="ti-trash"></i>
						</button>
					    </form>
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