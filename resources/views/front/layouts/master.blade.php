<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{asset('front')}}/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Ruft Blog</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Rubik:500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{asset('front')}}/css/linearicons.css">
	<link rel="stylesheet" href="{{asset('front')}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('front')}}/css/bootstrap.css">
	<link rel="stylesheet" href="{{asset('front')}}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{asset('front')}}/css/nice-select.css">
	<link rel="stylesheet" href="{{asset('front')}}/css/animate.min.css">
	<link rel="stylesheet" href="{{asset('front')}}/css/owl.carousel.css">
	<link rel="stylesheet" href="{{asset('front')}}/css/main.css">
	
</head>

<body>

	{{-- <a href="{{ route('check') }}">Check</a>  || --}}
	<div class="language" style="float:right;margin-right:200px;padding: 15px 20px;background-color:black;">
		@if(session('lang') == 'ban') 
		  	<a href="{{ route('english') }}" style="color:white;">English</a>  
		  @elseif(session('lang') == 'eng')
		  	<a href="{{ route('bangla') }}" style="color:white;">বাংলা</a>
		  @else
		  	<a href="{{ route('english') }}" style="color:white;">English</a>
		  @endif

	</div>
		  


    @include('front.layouts.menu')
    
    @yield('content')



<footer class="footer-area section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li><img src="{{asset('front')}}/img/i1.jpg" alt=""></li>
							<li><img src="{{asset('front')}}/img/i2.jpg" alt=""></li>
							<li><img src="{{asset('front')}}/img/i3.jpg" alt=""></li>
							<li><img src="{{asset('front')}}/img/i4.jpg" alt=""></li>
							<li><img src="{{asset('front')}}/img/i5.jpg" alt=""></li>
							<li><img src="{{asset('front')}}/img/i6.jpg" alt=""></li>
							<li><img src="{{asset('front')}}/img/i7.jpg" alt=""></li>
							<li><img src="{{asset('front')}}/img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="{{asset('front')}}/#"><i class="fa fa-facebook"></i></a>
							<a href="{{asset('front')}}/#"><i class="fa fa-twitter"></i></a>
							<a href="{{asset('front')}}/#"><i class="fa fa-dribbble"></i></a>
							<a href="{{asset('front')}}/#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | boikotha.net</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{asset('front')}}/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="{{asset('front')}}/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{asset('front')}}/js/easing.min.js"></script>
	<script src="{{asset('front')}}/js/hoverIntent.js"></script>
	<script src="{{asset('front')}}/js/superfish.min.js"></script>
	<script src="{{asset('front')}}/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{asset('front')}}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('front')}}/js/owl.carousel.min.js"></script>
	<script src="{{asset('front')}}/js/jquery.tabs.min.js"></script>
	<script src="{{asset('front')}}/js/jquery.nice-select.min.js"></script>
	<script src="{{asset('front')}}/js/waypoints.min.js"></script>
	<script src="{{asset('front')}}/js/mail-script.js"></script>
	<script src="{{asset('front')}}/js/main.js"></script>

	<script>
		$(document).ready(function(){
    $('.nav-menu li').hover(function(){
        $(this).addClass('animated headShake');
    });
    $('.nav-menu li').mouseleave(function(){
        $(this).removeClass('animated headShake');
	});
	
    $('.language').hover(function(){
        $(this).addClass('animated pulse');
    });
    $('.language').mouseleave(function(){
        $(this).removeClass('animated pulse');
    });
});
	</script>
</body>

</html>