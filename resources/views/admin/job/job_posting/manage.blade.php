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
			<h4 class="card-title">Job Vacancy list</h4>
			<h6 class="card-subtitle"></h6>
			<div class="table-responsive">
			    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
				<thead>
				    <tr>
					<td colspan="2">
					    <a href="{{route('job_list_add')}}" class="btn btn-info btn-rounded" data-target="#add-contact">Add Job Vacancy</a>
					</td>
				    </tr>
				    <tr>
					<th>No</th>
					<th>Title</th>
					<th>Designation</th>
					<th>Deadline</th>
					<th>Status</th>
					<th>Action</th>
				    </tr>
				</thead>
				<tbody>
				    @foreach($joblists as $key => $joblist)
				    <tr>
					<td><?php echo $key + 1 ?></td>
					<td>{{$joblist->job_title}}</td>
					@foreach($designations as $designation)
					@if($designation->id == $joblist->job_des_id)
					<td>{{$designation->designation_name}}</td>
					@endif
					@endforeach


					<td>{{$joblist->job_dead_line}}</td>



					<td>
					    @if($joblist->status==1)
					    <form action="{{route('joblist_published')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$joblist->id}}" name="job_list_id">
						<button type="submit" class="btn btn-success">Published</button>
					    </form>
					    @else
					    <form action="{{route('joblist_unpublished')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$joblist->id}}" name="job_list_id">
						<button type="submit" class="btn btn-warning">Unpublished</button>
					    </form>
					    @endif
					</td>

					<td>
					    <form action="{{route('joblist_edit')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$joblist->id}}" name="job_list_id">
						<button type="submit" class="btn btn-info" aria-haspopup="true" aria-expanded="false">
						    <i class="ti-settings"></i>
						</button>
					    </form>

					    <form action="{{route('joblist_destroy')}}" method="POST" style="display: inline">
						{{csrf_field()}}
						<input type="hidden" value="{{$joblist->id}}" name="job_list_id">
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