<!DOCTYPE html>
<html lang="en">

    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/admin')}}/assets/images/favicon.png">
	<title>@yield('title')</title>
	<!-- Bootstrap Core CSS -->
	<link href="{{asset('public/admin')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/admin')}}/assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
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
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    </head>

    <body class="fix-header fix-sidebar card-no-border">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
	    <svg class="circular" viewBox="25 25 50 50">
	    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
	    <!-- ============================================================== -->
	    <!-- Topbar header - style you can find in pages.scss -->
	    <!-- ============================================================== -->
	    @include('layouts.header')
	    <!-- ============================================================== -->
	    <!-- End Topbar header -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- Left Sidebar - style you can find in sidebar.scss  -->
	    <!-- ============================================================== -->
	    @include('layouts.side_nav')
	    <!-- ============================================================== -->
	    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- Page wrapper  -->
	    <!-- ============================================================== -->
	    @yield('content')
	    <!-- ============================================================== -->
	    <!-- End Page wrapper  -->
	    <!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
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
	<!-- Html Editor -->
	<script src="{{asset('public/admin')}}/assets/plugins/html5-editor/wysihtml5-0.3.0.js"></script>
	<script src="{{asset('public/admin')}}/assets/plugins/html5-editor/bootstrap-wysihtml5.js"></script>
	<script>
	    $(document).ready(function () {
		$('.textarea_editor').wysihtml5();
	    });


	    $(document).ready(function () {
		$('.textarea_editor_1').wysihtml5();
	    });

	    $(document).ready(function () {
		$('.textarea_editor_2').wysihtml5();
	    });

	    $(document).ready(function () {
		$('.textarea_editor_3').wysihtml5();
	    });
	</script>
    </body>

</html>