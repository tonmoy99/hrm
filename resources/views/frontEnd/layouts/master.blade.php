<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>@yield('title')</title>

	<!-- Bootstrap -->
	<link href="{{asset('public/bootstrap')}}/css/bootstrap.min.css" rel="stylesheet">



	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
	<title>@yield('title')</title>
	<!-- Bootstrap Core CSS -->
	<link href="{{asset('public/admin')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/admin')}}/assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
	<link href="{{asset('public/admin')}}/assets/plugins/wizard/steps.css" rel="stylesheet">



	<!-- morris CSS -->
	<link href="{{asset('public/admin')}}/assets/plugins/morrisjs/morris.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{asset('public/admin')}}/css/style.css" rel="stylesheet">
	<!-- You can change the theme colors from here -->
	<link href="{{asset('public/admin')}}/css/colors/blue.css" id="theme" rel="stylesheet">
	<link href="{{asset('public/admin')}}/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/admin')}}/assets/plugins/footable/css/footable.core.css" rel="stylesheet">
	<link href="{{asset('public/admin')}}/assets/plugins/footable/css/footable.core.css" rel="stylesheet">
	<link href="{{asset('public/admin')}}/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
	<link href="{{asset('public/admin')}}/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    </head>
    <body>



	@yield('content')



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{asset('public/bootstrap')}}/js/bootstrap.min.js"></script>
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

	<script>//tinymce.init({selector: 'textarea'});</script>

	<script src="{{asset('public/admin')}}/assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="{{asset('public/admin')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="{{asset('public/admin')}}/js/jquery.slimscroll.js"></script>
	<!--Wave Effects -->
	<script src="{{asset('public/admin')}}/js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="{{asset('public/admin')}}/js/sidebarmenu.js"></script>
	<!--stickey kit -->
	<script src="{{asset('public/admin')}}/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
	<!--Custom JavaScript -->
	<script src="{{asset('public/admin')}}/js/custom.min.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<!--sparkline JavaScript -->
	<script src="{{asset('public/admin')}}/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
	<!--morris JavaScript -->
	<script src="{{asset('public/admin')}}/assets/plugins/raphael/raphael-min.js"></script>
	<script src="{{asset('public/admin')}}/assets/plugins/morrisjs/morris.min.js"></script>
	<!-- Chart JS -->
	<script src="{{asset('public/admin')}}/js/dashboard1.js"></script>
	<!-- ============================================================== -->
	<!-- Style switcher -->
	<!-- ============================================================== -->
	<script src="{{asset('public/admin')}}/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
	<script src="{{asset('public/admin')}}/assets/plugins/footable/js/footable.all.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
	<script src="{{asset('public/admin')}}/js/footable-init.js"></script>

	<script src="{{asset('public/admin')}}/assets/plugins/wizard/jquery.steps.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/plugins/wizard/jquery.validate.min.js"></script>

	<script src="{{asset('public/admin')}}/assets/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="{{asset('public/admin')}}/assets/plugins/wizard/steps.js"></script>
    </body>
</html>
