@extends('layouts.adminMaster')

@section('title')
Manage
@endsection


@section('content')

<div class="page-wrapper">

    <div class="row page-titles">
	<div class="col-md-5 align-self-center">
	    <h3 class="text-themecolor">Profile</h3>
	</div>
	<div class="col-md-7 align-self-center">
	    <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
		<li class="breadcrumb-item">pages</li>
		<li class="breadcrumb-item active">Profile</li>
	    </ol>
	</div>
	<div>
	    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>
    </div>

    <div class="continer-fluid">
	<div class="col-sm-12">
	    <div class="row">


		<!-- Column -->
		<div class="col-lg-4 col-xlg-3 col-md-5">
		    <div class="card">
			<div class="card-body">
			    <center class="m-t-30"> <img src="{{asset('public/admin')}}/assets/images/users/profile.png" class="img-circle" width="150" />
				<h4 class="card-title m-t-10">{{$candidates->candidate_name}}</h4>
				<!--				<h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
								<div class="row text-center justify-content-md-center">
								    <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
								    <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
								</div>-->
				<div style="width: 50%; margin: auto;">
				    <form action="{{route('candidate_destroy')}}" method="POST" >
					{{csrf_field()}}
					<input type="hidden" value="{{$candidates->id}}" name="candidate_id">
					<button type="submit" class="btn waves-effect waves-light btn-danger" style="float: left">Reject</button>
				    </form>

				    <form action="" method="POST" >
					{{csrf_field()}}
					<input type="hidden" value="{{$candidates->id}}" name="candidate_id">
					<button type="submit" class="btn waves-effect waves-light btn-success" style="">Accept</button>
				    </form>
				</div>


			    </center>
			</div>
			<div>
			    <hr> </div>
			<div class="card-body"> <small class="text-muted">Email address </small>
			    <h6>{{$candidates->candidate_email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
			    <h6>{{$candidates->candidate_phone}}</h6> <small class="text-muted p-t-30 db">Present Address</small>
			    <h6><?php echo $candidates->candidate_present_address ?></h6>
			    <small class="text-muted p-t-30 db">Parmanent Address</small>
			    <h6><?php echo $candidates->candidate_parmanent_address ?></h6>
			    <!--			    <div class="map-box">
							    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div> <small class="text-muted p-t-30 db">Social Profile</small>
							<br/>
							<button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
							<button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
							<button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>-->
			</div>
		    </div>
		</div>
		<!-- Column -->
		<!-- Column -->
		<div class="col-lg-8 col-xlg-9 col-md-7">
		    <div class="card">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs profile-tab" role="tablist">
			    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Education</a></li>
			    @if($candidates->ex_duration == true)
			    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Experience</a></li>
			    @endif
			</ul>
			<!-- Tab panes -->
			<div class="tab-content" style="height: 720px;">
			    <div class="tab-pane active" id="home" role="tabpanel">
				<div class="card-body">
				    <div class="">
					<div class="row">
					    <div class="table-responsive">
						<table class="table" >
						    <thead>
							<tr>

							    <th>Year</th>
							    <th>Institute</th>
							    <th>Department</th>
							    <th>GPA/Division</th>

							</tr>
						    </thead>
						    <tbody>

							<tr>

							    <td>
								<?php
								$candidate_year = json_decode($candidates->ed_year);
								foreach ($candidate_year as $year) {
								    echo "$year <br>";
								}
								?>
							    </td>
							    <td>
								<?php
								$candidate_institute = json_decode($candidates->ed_institute);
								foreach ($candidate_institute as $institute) {
								    echo $institute . "<br>";
								}
								?>

							    </td>
							    <td>
								<?php
								$candidate_department = json_decode($candidates->ed_department);
								foreach ($candidate_department as $department) {
								    echo "$department <br>";
								}
								?>

							    </td>
							    <td>
								<?php
								$candidate_results = json_decode($candidates->ed_gpa_division);
								foreach ($candidate_results as $results) {
								    echo "$results <br>";
								}
								?>
							    </td>
							</tr>

						</table>
					    </div>
					</div>

				    </div>
				</div>
			    </div>
			    <!--			    second tab-->
			    <div class="tab-pane" id="profile" role="tabpanel">
				<div class="card-body">
				    <div class="row">
					<div class="table-responsive">
					    <table class="table" >
						<thead>
						    <tr>

							<th>Institute</th>
							<th>Duration(year)</th>
							<th>Department</th>
							<th>Position</th>

						    </tr>
						</thead>
						<tbody>

						    <tr>

							<td>
							    <?php
							    $candidate_ex_institute = json_decode($candidates->ex_institute);
							    foreach ($candidate_ex_institute as $institute) {
								echo "$institute <br>";
							    }
							    ?>
							</td>
							<td>
							    <?php
							    $candidate_duration = json_decode($candidates->ex_duration);
							    foreach ($candidate_duration as $duration) {
								echo $duration . "<br>";
							    }
							    ?>

							</td>
							<td>
							    <?php
							    $candidate_ex_department = json_decode($candidates->ex_department);
							    foreach ($candidate_ex_department as $ex_department) {
								echo "$ex_department <br>";
							    }
							    ?>

							</td>
							<td>
							    <?php
							    $candidate_position = json_decode($candidates->ex_position);
							    foreach ($candidate_position as $position) {
								echo "$position <br>";
							    }
							    ?>
							</td>
						    </tr>


						</tbody>
					    </table>
					</div>
				    </div>

				</div>

			    </div>
			</div>
		    </div>
		    <!-- Column -->
		</div>

	    </div>
	</div>

    </div>
</div>
@endsection