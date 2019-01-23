@extends('frontEnd.layouts.master')



@section('content')

<div class="page-wrapper">
    <div class="row page-titles">
	<div class="col-md-5 align-self-center">
	    <h3 class="text-themecolor">Form wizards</h3>
	</div>
	<div class="col-md-7 align-self-center">
	    <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item active">Form wizards</li>
	    </ol>
	</div>
	<div class="">
	    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>
    </div>
    <div class="container">
	<div class="row" id="validation">
	    <div class="col-12">
		<div class="card wizard-content">
		    <div class="card-body">
			<form action="{{route('employee_store')}}" method="POST">
			    {{csrf_field()}}
			    <div class="form-body">
				<h3 class="card-title">Personal Information</h3>
				<hr>
				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">First Name</label>
					    <input required name="emp_first_name" type="text" id="firstName" class="form-control" placeholder="First Name">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">Last Name</label>
					    <input required name="emp_last_name" type="text" id="lastName" class="form-control" placeholder="Last Name">
					</div>
				    </div>
				    <!--/span-->
				</div>

				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">Father's Name</label>
					    <input required name="emp_father_name" type="text" class="form-control" placeholder="Father's Name">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">Mother's Name</label>
					    <input required name="emp_mother_name" type="text"  class="form-control" placeholder="Mother's Name">
					</div>
				    </div>
				    <!--/span-->
				</div>
				<!--/row-->



				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">NID</label>
					    <input required name="nid" type="text"  class="form-control" placeholder="National Id No">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">Nationality</label>
					    <input required name="emp_nationality" type="text" id="lastName" class="form-control" placeholder="Nationality">
					</div>
				    </div>
				    <!--/span-->
				</div>

				<!--/row-->
				<div class="row">
				    <div class="col-md-6">
					<div class="form-group has-success">
					    <label class="control-label">Gender</label>
					    <select class="form-control custom-select" name="emp_gender" required="">
						<option value="">Select Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					    </select>
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">Date of Birth</label>
					    <input required name="emp_date_0f_birth" type="date" class="form-control" placeholder="dd/mm/yyyy">
					</div>
				    </div>
				    <!--/span-->
				</div>
				<!--/row-->
				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">Marital Status</label>
					    <select required="" name="emp_marital_status" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
						<option value="">Select Marital Status</option>
						<option value="married">Married</option>
						<option value="unmarried">Unmarried</option>

					    </select>
					</div>
				    </div>

				    <div class="col-md-6">
					<div class="form-group">
					    <label class="control-label">Blood Group</label>
					    <select required="" name="emp_blood_group" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
						<option value="">Select Blood Group</option>
						<option value="A_Positive">A+</option>
						<option value="A_Negative">A-</option>
						<option value="B_Positive">B+</option>
						<option value="B_Negative">B-</option>
						<option value="AB_Positive">AB+</option>
						<option value="AB_Negative">AB-</option>
						<option value="O_Positive">O+</option>
						<option value="O_Negative">O-</option>
					    </select>
					</div>
				    </div>
				    <!--/span-->

				    <!--/span-->
				</div>

				<h3 class="card-title">Educational Information</h3>
				<hr>

				<div class="table-responsive">
				    <table class="table table-bordered" id="dynamic_field">
					<label for="exampleInputPassword1">Education</label>
					<tr>
					    <td>
						<input type="text" name="ed_year[]" placeholder="Year" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />
						<input type="text" name="ed_institute[]" placeholder="Institute" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />
						<input type="text" name="ed_department[]" placeholder="Department" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />
						<input type="text" name="ed_gpa_division[]" placeholder="GPA/Division" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />
					    </td>
					    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
					</tr>
				    </table>


				    <h3 class="card-title">Past Professional Information (If any)<input type="button" onclick="myFunction();" value="Click Here"></h3>
				    <hr>
				    <div id="emp_experience" style="display: none;">
					<table  class="table table-bordered" id="dynamic_field_1"
						<label for="exampleInputPassword1">Experience</label>
					    <tr>
						<td>
						    <input type="text" name="ex_institute[]" placeholder="Institute" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />
						    <input type="text" name="ex_duration[]" placeholder="Duration " class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />
						    <input type="text" name="ex_department[]" placeholder="Department" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />
						    <input type="text" name="ex_position[]" placeholder="Position" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />
						</td>
						<td><button type="button" name="add" id="add_1" class="btn btn-success">Add More</button></td>
					    </tr>
					</table>
				    </div>


				</div>



				<!--/row-->
				<h3 class="box-title m-t-40">Contact Information</h3>
				<hr>
				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label>Phone</label>
					    <input required name="emp_phone" type="text" class="form-control" placeholder="Phone">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-6">
					<div class="form-group">
					    <label>Email</label>
					    <input required name="emp_email" type="text" class="form-control" placeholder="Email">
					</div>
				    </div>
				    <!--/span-->
				</div>
				<!--/row-->
				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label>District</label>
					    <input required name="emp_district" type="text" class="form-control">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-6">
					<div class="form-group">
					    <label>City</label>
					    <input required name="emp_city" type="text" class="form-control">
					</div>
				    </div>
				    <!--/span-->
				</div>

				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label>Village</label>
					    <input required name="emp_village" type="text" class="form-control">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-6">
					<div class="form-group">
					    <label>Street</label>
					    <input required name="emp_street" type="text" class="form-control">
					</div>
				    </div>
				    <!--/span-->
				</div>

				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label>Postal Code</label>
					    <input required name="emp_postal_code" type="text" class="form-control">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-6">
					<div class="form-group">
					    <label>House No</label>
					    <input required name="emp_house_no" type="text" class="form-control">
					</div>
				    </div>
				    <!--/span-->
				</div>




				<!--row-->

				<h3 class="box-title m-t-40">Emargency Contact Information</h3>
				<hr>
				<div class="row">
				    <div class="col-md-12">
					<div class="form-group">
					    <label>Name</label>
					    <input required name="emargency_name" type="text" class="form-control" placeholder="Name">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-12">
					<div class="form-group">
					    <label>Email</label>
					    <input required name="emargency_email" type="text" class="form-control" placeholder="Email">
					</div>
				    </div>
				    <!--/span-->
				</div>


				<div class="row">
				    <div class="col-md-12">
					<div class="form-group">
					    <label>Phone</label>
					    <input required name="emargency_phone" type="text" class="form-control" placeholder="Phone">
					</div>
				    </div>
				    <!--/span-->
				    <div class="col-md-12">
					<div class="form-group">
					    <label>Address</label>
					    <textarea required name="emargency_address" rows="10" type="text" class="form-control" placeholder="Address"></textarea>
					</div>
				    </div>
				    <!--/span-->
				</div>




				<h3 class="box-title m-t-40">Login Information</h3>
				<hr>
				<div class="row">
				    <div class="col-md-12">
					<div class="form-group">
					    <label>Email</label>
					    <input required name="emp_user_email" type="email" class="form-control" placeholder="Phone">
					</div>
				    </div>

				    <div class="col-md-12">
					<div class="form-group">
					    <label>Password</label>
					    <input required name="emp_password" type="password" class="form-control" placeholder="Password">
					</div>
				    </div>

				</div>

				<!--/row-->

			    </div>
			    <div class="form-actions">
				<button type="submit" class="btn btn-success">Save</button>
			    </div>
			</form>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
                                        $(document).ready(function () {
                                            var i = 1;
                                            $('#add').click(function () {
                                                i++;
                                                $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="ed_year[]" placeholder="Year" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />\n\
								  <input type="text" name="ed_institute[]" placeholder="Institute" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />\n\
								  <input type="text" name="ed_department[]" placeholder="Department" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />\n\
								  <input type="text" name="ed_gpa_division[]" placeholder="GPA/Division" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" /></td>\n\
								  <td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
                                            });

                                            $('#add_1').click(function () {
                                                i++;
                                                $('#dynamic_field_1').append('<tr id="row' + i + '"><td><input type="text" name="ex_institute[]" placeholder="Institute" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />\n\
								<input type="text" name="ex_duration[]" placeholder="Duration" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />\n\
								<input type="text" name="ex_department[]" placeholder="Department" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" />\n\
								<input type="text" name="ex_position[]" placeholder="Position" class="form-control name_list" style="width: 24%; float: left; margin: 2px;" /></td>\n\
								<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
                                            });

                                            $(document).on('click', '.btn_remove', function () {
                                                var button_id = $(this).attr("id");
                                                $('#row' + button_id + '').remove();
                                            });

                                            $('#submit').click(function () {
                                                $.ajax({
                                                    url: "name.php",
                                                    method: "POST",
                                                    data: $('#add_name').serialize(),
                                                    success: function (data)
                                                    {
                                                        alert(data);
                                                        $('#add_name')[0].reset();
                                                    }
                                                });
                                            });

                                        });
</script>

<script>
    function myFunction() {
        var x = document.getElementById("emp_experience");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

@endsection