<!DOCTYPE html>
<html lang="en">

<head>
	<title>One Tech</title>
	<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="#">
	<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="#">
	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('assets') }}\images\favicon.ico" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}\bower_components\bootstrap\css\bootstrap.min.css">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}\icon\themify-icons\themify-icons.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}\icon\font-awesome\css\font-awesome.min.css">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}\icon\icofont\css\icofont.css">
	<!-- feather Awesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}\icon\feather\css\feather.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}\css\style.css">
	<!-- Data Table Css -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}\assets\pages\data-table\css\buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
	<!-- My Style.css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}\css\mystyle.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}\css\jquery.mCustomScrollbar.css">
	<!-- sweet alert framework -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}\bower_components\sweetalert\css\sweetalert2.min.css">
	  <!-- jpro forms css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}\pages\j-pro\css\demo.css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}\pages\j-pro\css\font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}\pages\j-pro\css\j-pro-modern.css">
  <script type="text/javascript" src="{{asset('assets')}}\pages\j-pro\js\jquery.ui.min.js"></script>
	<script type="text/javascript" src="{{asset('assets')}}\pages\j-pro\js\jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="{{asset('assets')}}\pages\j-pro\js\jquery.j-pro.js"></script>
	<!-- Animate -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}\css\animate.css">
</head>

<body>
	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="ball-scale">
			<div class='contain'>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
	 	<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">

					<div class="navbar-logo">
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="feather icon-menu"></i>
						</a>
						<a href="index-1.htm">
							<h4>One Tech</h4>
						</a>
						<a class="mobile-options">
							<i class="feather icon-more-horizontal"></i>
						</a>
					</div>

					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()">
									<i class="feather icon-maximize full-screen"></i>
								</a>
							</li>
						</ul>
						<ul class="nav-right">
							<li class="user-profile header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<!-- <img src="{{ asset('assets') }}\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
										<span>{{$access}}</span>
										<i class="feather icon-chevron-down"></i>
									</div>
									<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
										<li>
											<a href="#!">
												<i class="feather icon-settings"></i> Settings
											</a>
										</li>
										<li>
											<a href="user-profile.htm">
												<i class="feather icon-user"></i> Profile
											</a>
										</li>
										<li>
											<a href="{{route('logout')}}">
												<i class="feather icon-log-out"></i> Logout
											</a>
										</li>
									</ul>

								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="pcoded-inner-navbar main-menu">
							<br>
							<ul class="pcoded-item pcoded-left-item">
								<li class="">
									<a href="{{url('home')}}">
										<span class="pcoded-micon"><i id="icon-home" class="feather icon-home"></i></span>
										<span class="pcoded-mtext">Home</span>
									</a>
								</li>
							</ul>
							@if($access == 'admin')
							<div class="pcoded-navigatio-lavel" menu-title-theme="theme6">Master</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="">
									<a href="{{url('member')}}">
										<span class="pcoded-micon"><i id="icon-member" class="feather icon-users"></i></span>
										<span class="pcoded-mtext">Members</span>
									</a>
								</li>
								<li class="">
									<a href="{{url('supplier')}}">
										<span class="pcoded-micon"><i id="icon-supplier" class="feather icon-briefcase"></i></span>
										<span class="pcoded-mtext">Suppliers</span>
									</a>
								</li>
								<li class="">
									<a href="{{url('employee')}}">
										<span class="pcoded-micon"><i id="icon-employee" class="feather icon-user"></i></span>
										<span class="pcoded-mtext">Employees</span>
									</a>
								</li>
							</ul>
							<div class="pcoded-navigatio-lavel" menu-title-theme="theme6">Product</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="">
									<a href="{{url('category')}}">
										<span class="pcoded-micon"><i id="icon-category" class="feather icon-bookmark"></i></span>
										<span class="pcoded-mtext">Categories</span>
									</a>
								</li>
								<li class="">
									<a href="{{ url('product') }}">
										<span class="pcoded-micon"><i id="icon-product" class="feather icon-package"></i></span>
										<span class="pcoded-mtext">Products</span>
									</a>
								</li>
							</ul>
							@endif
							<div class="pcoded-navigatio-lavel" menu-title-theme="theme6">Transaction</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="">
									<a href="{{ url('buying') }}">
										<span class="pcoded-micon"><i id="icon-buying" class="feather icon-shopping-cart"></i></span>
										<span class="pcoded-mtext">Buying</span>
									</a>
								</li>
								<li class="">
									<a href="{{ url('selling') }}">
										<span class="pcoded-micon"><i id="icon-selling" class="feather icon-credit-card"></i></span>
										<span class="pcoded-mtext">Selling</span>
									</a>
								</li>
							</ul>	
							<div class="pcoded-navigatio-lavel" menu-title-theme="theme6">Report</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="">
									<a href="{{url('report-buying')}}">
										<span class="pcoded-micon"><i id="icon-report-buying" class="feather icon-clipboard"></i></span>
										<span class="pcoded-mtext">Report Buying</span>
									</a>
								</li>
								<li class="">
									<a href="{{url('report-selling')}}">
										<span class="pcoded-micon"><i id="icon-report-selling" class="feather icon-book"></i></span>
										<span class="pcoded-mtext">Report Selling</span>
									</a>
								</li>
							</ul>
							<div class="pcoded-navigatio-lavel" menu-title-theme="theme6">Other</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="">
									<a href="{{url('display-review')}}">
										<span class="pcoded-micon"><i id="icon-about" class="feather icon-award"></i></span>
										<span class="pcoded-mtext">Review</span>
									</a>
								</li>
								<li class="">
									<a href="#">
										<span class="pcoded-micon"><i id="icon-about" class="feather icon-help-circle"></i></span>
										<span class="pcoded-mtext">About Us</span>
									</a>
								</li>
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i id="icon-setting" class="feather icon-sliders"></i></span>
										<span class="pcoded-mtext">Setting</span>
									</a>
									<ul class="pcoded-submenu">
										<li class="">
											<a href="{{url('logging')}}">
												<span class="pcoded-mtext">Logging</span>
											</a>
										</li>
										<li class="">
											<a href="dashboard-crm.htm">
												<span class="pcoded-mtext">Logout</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
					<div class="pcoded-content">
						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">
									<!-- Page-header start -->
									@if(empty($idTransaction))
									<div class="page-header">
										@yield('header')
									</div>
									@endif
									<!-- Page-header end -->
									<div class="page-body">
										@yield('content')
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Warning Section Starts -->
	<!-- Older IE warning message -->
	<!--[if lt IE 10]>
<div class="ie-warning">
	<h1>Warning!!</h1>
	<p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
	<div class="iew-container">
		<ul class="iew-download">
			<li>
				<a href="http://www.google.com/chrome/">
					<img src="{{ asset('assets') }}/images/browser/chrome.png" alt="Chrome">
					<div>Chrome</div>
				</a>
			</li>
			<li>
				<a href="https://www.mozilla.org/en-US/firefox/new/">
					<img src="{{ asset('assets') }}/images/browser/firefox.png" alt="Firefox">
					<div>Firefox</div>
				</a>
			</li>
			<li>
				<a href="http://www.opera.com">
					<img src="{{ asset('assets') }}/images/browser/opera.png" alt="Opera">
					<div>Opera</div>
				</a>
			</li>
			<li>
				<a href="https://www.apple.com/safari/">
					<img src="{{ asset('assets') }}/images/browser/safari.png" alt="Safari">
					<div>Safari</div>
				</a>
			</li>
			<li>
				<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
					<img src="{{ asset('assets') }}/images/browser/ie.png" alt="">
					<div>IE (9 & above)</div>
				</a>
			</li>
		</ul>
	</div>
	<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
	<!-- Warning Section Ends -->
	<!-- Required Jquery -->
	<script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script><script type="text/javascript" src="{{ asset('assets') }}\bower_components\jquery\js\jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets') }}\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets') }}\bower_components\popper.js\js\popper.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets') }}\bower_components\bootstrap\js\bootstrap.min.js"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="{{ asset('assets') }}\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
	<!-- modernizr js -->
	<script type="text/javascript" src="{{ asset('assets') }}\bower_components\modernizr\js\modernizr.js"></script>
	<!-- amchart js -->
	<script src="{{ asset('assets') }}\js\jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets') }}\js\SmoothScroll.js"></script>
	<script src="{{ asset('assets') }}\js\pcoded.min.js"></script>
	<!-- custom js -->
	<script src="{{ asset('assets') }}\js\vartical-layout.min.js"></script>

	<script type="text/javascript" src="{{ asset('assets') }}\js\script.min.js"></script>
	<!-- sweet alert js -->
	<script type="text/javascript" src="{{asset('assets')}}\bower_components\sweetalert\js\sweetalert2.all.min.js"></script>
	<!-- data-table js -->
<script src="{{asset('assets')}}\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
	<!-- my script -->
	<script src="{{ asset('assets') }}\js\myscript.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
@stack('script');
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
<!-- data-table js -->
</body>

</html>
