@extends('frontEnd.layouts.master')

@section('title')
Career
@endsection

@section('content')
<?php
$job_post_id = $_POST['job_des_id'];
?>

<div class="container">

    <div class="form-group col-sm-8 col-sm-offset-2">

	<div class="well">
	    <h2 class="text text-center text-info">Candidate Registration Form</h2>
	    <form name="add_name" id="add_name" action="{{route('candidate_form_store')}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
		    <label for="exampleInputEmail1">Name<span class="text text-danger">*</span></label>
		    <input required="" name="candidate_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
		    <input type="hidden" value="<?php echo $job_post_id ?>" name="job_post_id">
		</div>
		<div class="form-group">
		    <label for="exampleInputPassword1">Email<span class="text text-danger">*</span></label>
		    <input required="" name="candidate_email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
		</div>

		<div class="form-group">
		    <label for="exampleInputEmail1">Phone<span class="text text-danger">*</span></label>
		    <input required="" name="candidate_phone" type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone">
		</div>




		<div class="form-group">
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


			<table  class="table table-bordered" id="dynamic_field_1">
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

		<div class="form-group">
		    <label for="exampleInputPassword1">Present <span class="text text-danger">*</span></label>
		    <textarea required="" name="candidate_present_address" class="form-control" id="exampleInputPassword1"></textarea>
		</div>

		<div class="form-group">
		    <label for="exampleInputPassword1">Parmanent Address<span class="text text-danger">*</span></label>
		    <textarea required="" name="candidate_parmanent_address" class="form-control" id="exampleInputPassword1"></textarea>
		</div>

		<div class="form-group">
		    <label for="exampleInputEmail1">Expected Salary<span class="text text-danger">*</span></label>
		    <input required="" name="expected_salary" type="text" class="form-control" id="exampleInputEmail1" placeholder="Expected Salary">
		</div>

		<div class="form-group">
		    <select name="status" style="display: none;">
			<option value="0"></option>
		    </select>
		</div>

		<div class="form-group">
		    <label for="exampleInputEmail1">Upload Your CV</label>
		    <input type="file" name="CV" required="">
		</div>

		<input type="submit" name="submit" id="submit" class="btn btn-info btn-block" style="height: 50px; font-size: 20px; font-weight: bold;" value="Submit" />
	    </form>
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


@endsection