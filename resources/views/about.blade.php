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
					<div class="text-right" id="fh5co-logo"><a href="/"><img src="image/logos/kvtc.ico" width="40" >&nbsp&nbsp&nbspKVTC</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="/">Home</a></li>
							<li ><a href="courseslist">Courses</a></li>
							<li><a href="teacher">Teacher</a></li>
							<li><a href="gallery">Gallery</a></li>
							<li class="active"><a href="about">About</a></li>
							
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
	
	<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span>About Our Training Center</span>
				<h2>Welcome to Kawanthissa Vocational Training Center</h2>
			<p>We are a leading vocational training center dedicated to providing high-quality education and training to individuals seeking to enhance their career opportunities.</p>	
			<p>At Kawanthissa, we are committed to empowering individuals with the knowledge and skills necessary to succeed in their chosen fields. We offer a wide range of vocational courses that are designed to meet the needs of both students and employers, with programs in areas such as information technology, hospitality, and more.</p>

			<p>Our highly qualified instructors have years of industry experience and are passionate about sharing their knowledge with our students. They use innovative teaching methods and up-to-date curriculum to ensure that our students receive the best possible education.</p>
			<p>In addition to our comprehensive training programs, we also offer a range of support services to help our students achieve their goals. From career counseling and job placement assistance, we are dedicated to providing our students with the resources they need to succeed.</p>
			<p>At Kawanthissa, we believe that education is the key to a brighter future. We are proud to be a part of the Sri Lankan community and are committed to making a positive impact in the lives of our students and the wider community.</p>
			
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="image/kvtc.jpg" alt="Free HTML5 Bootstrap Template">
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
					
						<li class="md-5"><i class="icon-phone"></i>&nbsp 047-2239039</li>
						<br>
						<li><i class="icon-mail"></i>&nbsp kvtcsrilanka@yahoo.co.in</li>
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

