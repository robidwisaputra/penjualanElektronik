<!DOCTYPE html>
<html lang="en">

<head>
	<title>Review</title>
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

		<div class="pcoded-content">
			<div class="pcoded-inner-content">
				<div class="main-body">
					<div class="page-wrapper">
						<!-- Page-header start -->
						<!-- <div class="page-header"> header </div> -->
						<!-- Page-header end -->
						<div class="page-body">
							<div class="row">
								<div class="col-sm-1"></div>
								<div class="col-sm-10">
								  <div class="card">
							      <div class="card-header">
							        <h3>Review</h3>
							      </div>
							      @if (session('status'))
											<div class="flash-data" data-flashdata="{{ session('status') }}"></div>
										@endif
							      <div class="card-block ml-4">
							      	<form action="{{ route('review.input') }}" method="post">
							          @csrf           
								        <div class="form-group row">
								          <label class="col-sm-2 col-form-label" for="email">Email</label>
								          <div class="col-sm-8">
								            <input type="text" class="form-control @error('email') is-invalid @enderror " id="email" name="email"  autocomplete="off"  value="{{ old('email') }}">
								            @error('email')
								              <div class="invalid-feedback">{{ $message }}</div>
								            @enderror
								          </div>
								        </div>
								        <div class="form-group row">
								          <label class="col-sm-2 col-form-label" for="phone">No HP</label>
								          <div class="col-sm-8">
								            <input type="text" class="form-control @error('phone') is-invalid @enderror " id="phone" name="phone"  autocomplete="off"  value="{{ old('phone') }}">
								            @error('phone')
								              <div class="invalid-feedback">{{ $message }}</div>
								            @enderror
								          </div>
								        </div>
								        <div class="form-group row">
								          <label class="col-sm-2 col-form-label" for="name">Nama</label>
								          <div class="col-sm-8">
								            <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name" autocomplete="off"  value="{{ old('name') }}">
								            @error('name')
								              <div class="invalid-feedback">{{ $message }}</div>
								            @enderror
								          </div>
								        </div>
								        <div class="form-group row">
							            <label class="col-sm-2 col-form-label">Ulasan</label>
							            <div class="col-sm-8">
							                <textarea rows="4" cols="5" class="form-control @error('review') is-invalid @enderror" name="review"></textarea>
							                @error('review')
									              <div class="invalid-feedback">{{ $message }}</div>
									            @enderror
							            </div>
								        </div>
								        <div class="form-group row">
							            <label class="col-sm-2 col-form-label">Saran</label>
							            <div class="col-sm-8">
							                <textarea rows="4" cols="5" class="form-control @error('feedback') is-invalid @enderror" name="feedback"></textarea>
							                @error('feedback')
									              <div class="invalid-feedback">{{ $message }}</div>
									            @enderror
							            </div>
								        </div>
								        <button type="submit" class="float-right btn btn-primary">Send</button>
							        </form>
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
