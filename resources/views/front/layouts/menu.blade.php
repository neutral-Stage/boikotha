

<!--================ Start header Top Area =================-->
	<section class="header-top">
		<div class="container box_1170  ">
			<div class="row py-3">
				<div class="col-lg-6 col-md-6 col-sm-6 mx-auto ">
					<a href="{{asset('front')}}/index.html" class="logo">
						<img src="{{asset('front')}}/img/boi.png" alt="">
					</a>
				</div>
				
			</div>
		</div>
	</section>
	<!--================ End header top Area =================-->

	<!-- Start header Area -->
	<header id="header">
		<div class="container box_1170 main-menu">
			<div class="row align-items-center justify-content-center d-flex">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active yellow"><a href="{{ route ('home')}}">Home</a></li>
						<li class="red"><a href="{{asset('front')}}/category.html">Browse Books</a></li>
						<li class="indigo"><a href="{{ route ('reviewer')}}">Meet Our Reviewers</a></li>
						<li class="menu-has-children orange"><a href="{{asset('front')}}/">Read a Review</a></li>
						<li class="menu-has-children red"><a href="{{asset('front')}}/">About Us</a></li>
						<li class="yellow"><a href="{{asset('front')}}/contact.html">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		{{--  <div class="search_input" id="search_input_box">
			<div class="container box_1170">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>  --}}
	</header>