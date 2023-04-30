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
	<link href="{{asset('import/assets/css/logoslider.css')}}" rel="stylesheet" type="text/css" />

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
							<li><a href="https://web.facebook.com/profile.php?id=100063919955915"><i class="icon-facebook2"></i></a></li>
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
					<div class="col-xs-2 ">
						<div class="text-right" id="fh5co-logo"><a href="/"><img src="image/logos/kvtc.ico" width="40" >&nbsp&nbsp&nbspKVTC</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="/">Home</a></li>
							<li><a href="courseslist">Courses</a></li>
							<li><a href="teacher">Teacher</a></li>
							<li><a href="gallery">Gallery</a></li>
							<li><a href="about">About</a></li>
							<li class="">
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
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image:url({{$files[0]}})">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
								
			   					<h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
									
									<p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url({{$files[1]}});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The Great Aim of Education is not Knowledge, But Action</h1>
									
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url({{$files[2]}});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>We Help You to Learn New Things</h1>
									
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="services">
				<span class="icon">
							<i class="icon-eye"></i><!--changes-logo-->
						</span></div>
					<h2 class="text-secondary" >Our Vision</h2>
					<h3 class="text-muted">{{$vision[0]->vision}}</h3>
					<div class="services">
				<span class="icon">
							<i class="icon-flag"></i>
						</span></div>
					<h2 class="text-secondary">Our Mission</h2>
					<h3 class="text-muted">{{$vision[0]->mission}}</h3>
				</div>
			</div> 
			
		</div>
	</div>

	
	<div id="fh5co-counter" class="fh5co-counters" style="background-image: url({{asset('import/assets/images/img_bg_4.jpg')}});" >
	
	<div class="overlay"></div>
	
		<div class="container fh5co-heading">
		
			<div class="row">
				<div class=" col-md-10 col-md-offset-1">
				<h1 style="color:white;  " class="text-center">Since 1988</h1>	
				<br>
					<div class="row">
					
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-world"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="{{$vision[0]->sc1}}" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Students Enrolled</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-study"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="{{$vision[0]->sc2}}" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Students Graduated</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-bulb"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="{{$vision[0]->sc3}}" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Job Placements</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-head"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="{{$vision[0]->sc4}}" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Course Catagories</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Courses</h2>
					<p>Our carefully selected courses are tailored to meet your needs, ensuring that you receive the best possible education and training for your career success.</p>
				</div>
			</div>
			<div class="row">
				
				@foreach($courses as $course)
				<div class="col-md-6 animate-box">
					<div class="course">
					<a href="#" class="course-img" style="background-image: url(image/courses/{{$course->imageid}});">
						</a>
						<div class="desc">
						<h3><a href="#">{{$course->name}}</a></h3>
							<p style="color:#E83845;">Next Intake - {{$course->nextintake}}</p>	
						<span><a href="courseslist" class="btn btn-primary btn-sm ">Read More</a></span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<div class="container">
	<div class="row animate-box">
	<div class="our-clients text-center fh5co-heading">
	<h2>Our Partners</h2>
  <ul>
    
    <li> <img src="image/logos/jetwing.jpeg" alt=""> <img src="image/logos/jetwing.jpeg" alt=""> </li>
    <li> <img src="image/logos/wusc.png" alt=""> <img src="image/logos/wusc.png" alt=""> </li>
    <li> <img src="image/logos/care.png" alt=""> <img src="image/logos/care.png" alt=""> </li>
    <li> <img src="image/logos/usaid.png" alt=""> <img src="image/logos/usaid.png" alt=""> </li>
    <li> <img src="image/logos/childfund.png" alt=""> <img src="image/logos/childfund.png" alt=""> </li>
	<li> <img src="image/logos/ulead.png" alt=""> <img src="image/logos/ulead.png" alt=""> </li>
	<li> <img src="image/logos/naita.jpg" alt=""> <img src="image/logos/naita.jpg" alt=""> </li>
	<li> <img src="image/logos/vec.jpg" alt=""> <img src="image/logos/vec.jpg" alt=""> </li>
  </ul>
</div>
</div>
</div>
	

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>News &amp; Events</h2>
					<p>KVTC is committed to empowering its students with the knowledge and skills necessary to succeed in their chosen fields.</p>
				</div>
			</div>
			
			<div class="row">
				@foreach($posts as $post)
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="" class="blog-img-holder" style="background-image: url('image/posts/{{$post->imgid}}');"></a>
						<div class="blog-text text-center">
							<h3>{{$post->title}}</h3>
							<span class="posted_on">{{$post->date}}</span>
							
							<p>{{$post->description}}</p>
							<form action="/blogpost" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" name="id" value="{{$post->id}}" />
									
							<span><button type="submit" class="btn btn-primary btn-sm ">Read More</button></span>
							</form>
						</div> 
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>

	

	

	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2 class="btn btn-primary btn-sm ">Gallery</h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-padded">
				<a href="gallery" class="gallery" style="background-image: url({{$pic[0]}});"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="gallery" class="gallery" style="background-image: url({{$pic[1]}});"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="gallery" class="gallery" style="background-image: url({{$pic[2]}});"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="gallery" class="gallery" style="background-image: url({{$pic[3]}});"></a>
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

