@extends('front.layouts.master')
@section('content')
    <section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container box_1170">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Our Reviewers
					</h1>
					<p class="text-white link-nav"><a href="{{ route ('home')}}">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route ('reviewer')}}">
							Meet Our Reviewers</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start main body Area -->
	<div class="main-body section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start Post Area -->
					<section class="post-area">
						<div class="row">

														{{--  Reviewers  --}}
							@if(session('lang') == 'eng')						
              @foreach ($enre as $er)
							<div class="col-lg-6 col-md-6">
								<div class="single-post-item">
									<div class="post-thumb">
										<img class="img-fluid" src="{{ asset('reiviewer_photo/'.$er->photo) }}" alt="">
									</div>
									<div class="post-details">
										<h4><a href="#">{{ $er->name }}</a></h4>
										{!! $er->des !!}
										
									</div>
								</div>
							</div>

							@endforeach
							@elseif(session('lang') == 'ban')
							@foreach ($enre as $er)
							<div class="col-lg-6 col-md-6">
								<div class="single-post-item">
									<div class="post-thumb">
										<img class="img-fluid" src="{{ asset('reiviewer_photo/'.$er->photo) }}" alt="">
									</div>
									<div class="post-details">
										<h4><a href="#">{{ $er->name }}</a></h4>
										{!! $er->bn_des !!}
										
									</div>
								</div>
							</div>
							@endforeach

							@else
							@foreach ($enre as $er)
							<div class="col-lg-6 col-md-6">
								<div class="single-post-item">
									<div class="post-thumb">
										<img class="img-fluid" src="{{ asset('reiviewer_photo/'.$er->photo) }}" alt="">
									</div>
									<div class="post-details">
										<h4><a href="#">{{ $er->name }}</a></h4>
										{!! $er->des !!}
										
									</div>
								</div>
							</div>

							@endforeach
							@endif

							{{--  <div class="col-lg-12">
								<nav class="blog-pagination justify-content-center d-flex">
									<ul class="pagination">
										<li class="page-item">
											<a href="#" class="page-link" aria-label="Previous">
												<span aria-hidden="true">
													<span class="lnr lnr-arrow-left"></span>
												</span>
											</a>
										</li>
										<li class="page-item"><a href="#" class="page-link">01</a></li>
										<li class="page-item active"><a href="#" class="page-link">02</a></li>
										<li class="page-item"><a href="#" class="page-link">03</a></li>
										<li class="page-item"><a href="#" class="page-link">04</a></li>
										<li class="page-item"><a href="#" class="page-link">09</a></li>
										<li class="page-item">
											<a href="#" class="page-link" aria-label="Next">
												<span aria-hidden="true">
													<span class="lnr lnr-arrow-right"></span>
												</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>  --}}
						</div>
					</section>
					<!-- Start Post Area -->
				</div>


				<div class="col-lg-4 sidebar">
					
					

					<div class="single-widget popular-posts-widget">
						<div class="jq-tab-wrapper" id="horizontalTab">
							<div class="jq-tab-menu">
								<div class="jq-tab-title active" data-tab="1">Popular</div>
								<div class="jq-tab-title" data-tab="2">Latest</div>
							</div>
							<div class="jq-tab-content-wrapper">
								<div class="jq-tab-content active" data-tab="1">
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="{{ asset('front') }}/img/posts/carousel/stories1.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="{{ asset('front') }}/img/posts/carousel/stories2.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="{{ asset('front') }}/img/posts/carousel/stories3.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="{{ asset('front') }}/img/posts/carousel/stories4.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
								</div>

								<div class="jq-tab-content active" data-tab="2">

									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="{{ asset('front') }}/img/posts/carousel/stories2.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="{{ asset('front') }}/img/posts/carousel/stories3.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="{{ asset('front') }}/img/posts/carousel/stories1.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="{{ asset('front') }}/img/posts/carousel/stories4.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="single-widget category-widget">
						<h4 class="title">Post Categories</h4>
						<ul>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p><img src="{{ asset('front') }}/img/bullet.png" alt="">International (56)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p><img src="{{ asset('front') }}/img/bullet.png" alt="">Tours and Travels (45)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p><img src="{{ asset('front') }}/img/bullet.png" alt="">Cooking Tips (23)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p><img src="{{ asset('front') }}/img/bullet.png" alt="">Life Style and Fashion (72)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p><img src="{{ asset('front') }}/img/bullet.png" alt="">Organic News (37)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p><img src="{{ asset('front') }}/img/bullet.png" alt="">Games and Sports (19)</p>
								</a>
							</li>
						</ul>
					</div>

					<div class="single-widget tags-widget">
						<h4 class="title">Post Tags</h4>
						<ul>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Art</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Techlology</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Architecture</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Technology</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection