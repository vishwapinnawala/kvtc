<!DOCTYPE HTML>
<html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KVTC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="KVTC Sri Lanka" />
	<meta name="keywords" content="KVTC Sri Lanka Kawanthissa Vocational Training Center" />
	<meta name="author" content="vishwapinnawala" />


	
 

	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('import/assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('import/assets/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('import/assets/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('import/assets/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('import/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('import/assets/css/owl.theme.default.min.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('import/assets/css/flexslider.css')}}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{asset('import/assets/css/pricing.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('import/assets/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('import/assets/js/modernizr-2.6.2.min.js')}}"></script>
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('import/assets/js/respond.min.js')}}"></script>
	<![endif]-->
	<link rel="stylesheet" href="{{asset('import/assets/css/finalstyle.css')}}">
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.kvtc.lk</p>
						<p class="num">Call: 0472239039</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="/"><i class="icon-study"></i>KVTC<span></span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="/">Home</a></li>
							<li class="active"><a href="courseslist">Courses</a></li>
							
							<li><a href="teacher">Teacher</a></li>
							<li><a href="teacher">Gallery</a></li>
							<li><a href="about">About</a></li>
							
							<li class="has-dropdown">
								<a href="blog">Blog</a>
								
							</li>
							<li><a href="contact">Contact</a></li>
							@if (Route::has('login'))
                
				@auth
				<li class=""> <a href="{{ url('/dashboard') }}" class="">Dashboard</a></li>
				@else
				<li class=""> <a href="{{ route('login') }}" class="">Log in</a></li>

					@if (Route::has('register'))
					<li class=""> <a href="{{ route('register') }}" class="">Register</a></li>
					@endif
				@endauth                
		@endif


						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<!--
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
			@foreach ($files as $images)
		   	<li style="background-image:url({{$images}});">
			   
			   
			   @endforeach
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Our Course</h1>
									<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
-->
	<div id="fh2co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Courses</h2>
					<p >At our vocational training center, we offer a wide range of courses designed to equip you with the skills and knowledge needed to succeed in today's job market. Whether you're looking to start a new career or advance in your current one, our courses are tailored to meet your unique needs and goals. From hands-on training in technical trades to business management and professional development.</p>
					<h4 class="text-uppercase"> We have something for everyone</h4>
				</div>
			</div>
			<div class="row">
			@foreach ($courses as $courses)
				<div class="col-md-12 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(image/courses/{{$courses->imageid}});">
						</a>
						<div class="desc">
							<h3><a href="#">{{$courses->name}}</a></h3>
							<p class="text-justify">{{$courses->description}}</p>
							<p class="text-dark">Next Intake - {{$courses->nextintake}}</p>
							<p>Duration - {{$courses->duration}} Months</p>
							<p>NVQ Level - {{$courses->level}} </p>
							
							

							<span><a href="contact" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
			@endforeach	
				
			</div>
		</div>
	</div>



	<footer id="fh5co-footer" class="fh5co-bg"  style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="text-center col-md-3 fh5co-widget">
					<h3>About KVTC</h3>
					<p style="text-align: center;"><img src="image/kvtc-logo.ico"  width="50%"></p>
					<p class="text-justify">Kawanthissa Vocational Training Center empowers individuals through high-quality education & training. Experienced instructors, innovative methods, and support services.</p>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Get in Touch</h3>
					<ul class="fh5co-footer-links px-10">
					
						<li class="md-5"><i class="icon-phone"></i>&nbsp 0777409773</li>
						<br>
						<li><i class="icon-mail"></i>&nbsp info@slgti.ac.lk</li>
						<br>
						<li class="text-left"><i class="icon-location"></i>&nbsp Kawanthissa Vocational Training Center,
Kataragama Road, Thissamaharama, Sri Lanka.</li>
<br>
						<li class="text-left"><i class="icon-libreoffice"></i>&nbsp Monday to Friday – 8:00 am to 3:45 pm
(Saturday, Sunday & Public Holidays Closed)</li>
						
					</ul>
				</div>

				

				<div class="col-md-4 col-sm-5 col-xs-5 col-md-push-2 fh5co-widget">
					<h3 style="text-align: center">Engage us</h3>
					<ul class="fh5co-footer-links">
					<div style="text-align: center;" class="textwidget"><p><a href="" ><img decoding="async" class="aligncenter" title="State Ministry of Skills Development, Vocational Education, Research &amp; Innovation" src="image/tverrec.png" alt="State Ministry of Skills Development, Vocational Education, Research &amp; Innovation" width="30%"></a></p>
<p style="text-align: center;">State Ministry of Skills Development,<br>
Vocational Education, Research &amp; Innovation</p>
</div>
					</ul>
				</div>

			</div>
			

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2023 Vishsoft Solutions.</small> 
						<small class="block">Designed by <a href="http://vishsoft.com/" target="_blank">vishsoft.com</a> </small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	
	<!-- jQuery -->
	<script src="{{asset('import/assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('import/assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('import/assets/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('import/assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('import/assets/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('import/assets/js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('import/assets/js/jquery.flexslider-min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('import/assets/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('import/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('import/assets/js/magnific-popup-options.js')}}"></script>
	<!-- Count Down -->
	<script src="{{asset('import/assets/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('import/assets/js/main.js')}}"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>
