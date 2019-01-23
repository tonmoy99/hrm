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
					<th>No</th>
					<th>Title</th>
					<th>Designation</th>
					<th>Deadline</th>
					<th>Status</th>
					<th>Action</th>
				    </tr>
				</thead>
				<tbody>
				  
					
					    
						<tr>
						    
						   
						</tr>
						
					
				 


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