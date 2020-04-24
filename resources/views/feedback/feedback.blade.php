<!DOCTYPE html>
<html lang="en">

<head>
	<title>Adminty - Premium Admin Template by Colorlib </title>
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
  <!-- Switch component css -->
  <link rel="stylesheet" type="text/css" href="..\files\bower_components\switchery\css\switchery.min.css">
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
							<img class="img-fluid" src="{{ asset('assets') }}\images\logo.png" alt="Theme-Logo">
						</a>
						<a class="mobile-options">
							<i class="feather icon-more-horizontal"></i>
						</a>
					</div>

					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li class="header-search">
								<div class="main-search morphsearch-search">
									<div class="input-group">
										<span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
										<input type="text" class="form-control">
										<span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
									</div>
								</div>
							</li>
							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()">
									<i class="feather icon-maximize full-screen"></i>
								</a>
							</li>
						</ul>
						<ul class="nav-right">
							
							
						</ul>
					</div>
				</div>
			</nav>
		<!-- Page body start -->
						<div class="pcoded-content">
						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">
									<!-- Page-header start -->
									@if(empty($idTransaction))
									<div class="page-header">
											<div class="row align-items-end">
													<div class="col-lg-8">
															<div class="page-header-title">
																	<div class="d-inline">
																			<h2>@yield('title')</h2>
																	</div>
															</div>
													</div>
													<div class="col-lg-4">
															<div class="page-header-breadcrumb">
																	<ul class="breadcrumb-title">
																			<li class="breadcrumb-item">
																					<a href="index-1.htm"> <i class="feather icon-home"></i> </a>
																			</li>
																			<li class="breadcrumb-item"><a href="#!">Animation</a>
																			</li>
																	</ul>
															</div>
													</div>
											</div>
									</div>
									@endif
									<!-- Page-header end -->
              <!-- Page body start -->
              <div class="page-body">
                <div class="row">
                  <div class="col-sm-12">
                      <!-- Review Product card start -->
                      <div class="card">
                        <div class="card-header">
                          <h5>Review Our Service</h5>
                        </div>
                        	@if (session('status'))
													<div class="flash-data" data-flashdata="{{ session('status') }}"></div>
													@endif
                        <div class="card-block">
                        	@if ($errors->any())
														    <div class="alert alert-danger">
														        <ul>
														            @foreach ($errors->all() as $error)
														                <li>{{ $error }}</li>
														            @endforeach
														        </ul>
														    </div>
														@endif
                            <div class="j-wrapper j-wrapper-640">
                              <form action="{{route('feedback.input')}}" method="post" class="j-pro" id="j-pro" novalidate="">
                              	@csrf
                                <div class="j-content">
                                    <!-- start name -->
                                    <div class="j-unit">
                                      <label class="j-label">Name</label>
                                      <div class="j-input">
                                        <label class="j-icon-right" for="customer_name">
											                      <i class="icofont icofont-user"></i>
											                  </label>
                                        <input type="text" id="customer_name" name="customer_name" placeholder="e.g. John Doe" class="@error('customer_name') is-invalid @enderror" value="{{old('customer_name')}}">
                                        @error('customer_name')
																					<div class="invalid-feedback">{{ $message }}</div>
																				@enderror
                                      </div>
                                    </div>
                                    <!-- end name -->
                                    <!-- start email-->
                                    <div class="j-unit">
                                      <label class="j-label">Email</label>
                                      <div class="j-input">
                                        <label class="j-icon-right" for="email">
										                        <i class="icofont icofont-envelope"></i>
										                    </label>
                                        <input type="email" placeholder="email@domain.com" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{old('email')}}">
                                        @error('email')
																					<div class="invalid-feedback">{{ $message }}</div>
																				@enderror
                                      </div>
                                    </div>
                                    <!-- end email -->
                                    <!-- start message -->
                                    <div class="j-unit">
                                        <label class="j-label">Review message</label>
                                        <div class="j-input">
                                            <textarea placeholder="message..." spellcheck="false" name="feedback"></textarea>
                                        </div>
                                    </div>
                                  
                                    <!-- end message -->
                                    <div class="j-divider j-gap-bottom-25"></div>
                                    <!-- start ratings -->
                                    <div class="j-unit">
                                      <div class="j-rating-group">
                                        <label class="j-label">Service quality</label>
                                        <div class="j-ratings">
                                          <input id="5q" type="radio" name="rating" value="5">
                                          <label for="5q">
												                    <i class="icofont icofont-star"></i>
												                  </label>
                                          <input id="4q" type="radio" name="rating" value="4">
                                          <label for="4q">
												                    <i class="icofont icofont-star"></i>
												                  </label>
                                          <input id="3q" type="radio" name="rating" value="3">
                                          <label for="3q">
													                  <i class="icofont icofont-star"></i>
													                </label>
                                          <input id="2q" type="radio" name="rating" value="2">
                                          <label for="2q">
												                    <i class="icofont icofont-star"></i>
												                  </label>
                                          <input id="1q" type="radio" name="rating" value="1" checked="">
                                          <label for="1q">
												                    <i class="icofont icofont-star"></i>
												                  </label>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- end ratings -->
                                <!-- start response from server -->
                                <div class="j-response"></div>
                                <!-- end response from server -->
                                </div>
                                 <!-- end /.content -->
                                <div class="j-footer">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                                <!-- end /.footer -->
                              </form>
                            </div>
                        </div>
                      </div>
                      <!-- Review Product card end -->
                  </div>
                </div>
              </div>
              <!-- Page body end -->
								</div>

		<!-- Page body end -->
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
	<script src="{{ asset('assets') }}\pages\widget\amchart\amcharts.js"></script>
	<script src="{{ asset('assets') }}\pages\widget\amchart\serial.js"></script>
	<script src="{{ asset('assets') }}\pages\widget\amchart\light.js"></script>
	<script src="{{ asset('assets') }}\js\jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets') }}\js\SmoothScroll.js"></script>
	<script src="{{ asset('assets') }}\js\pcoded.min.js"></script>
	<!-- custom js -->
	<script src="{{ asset('assets') }}\js\vartical-layout.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets') }}\pages\dashboard\custom-dashboard.js"></script>
	<script type="text/javascript" src="{{ asset('assets') }}\js\script.min.js"></script>
	<!-- sweet alert js -->
	<script type="text/javascript" src="{{asset('assets')}}\bower_components\sweetalert\js\sweetalert2.all.min.js"></script>
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


</body>

</html>
