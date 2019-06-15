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
				<div class="col-md-4">
				<label for="">Price</label>
				<input name="" id="" class="btn btn-primary" type="button" value="">
				</div>
				<div class="col-md-4">
				<label for="">Age</label>
				<input name="" id="" class="btn btn-primary" type="button" value="">
				</div>
				<div class="col-md-4">
				
				<div class="form-group">
				  <label for="">Select Category</label>
				  <select class="form-control" name="" id="" multiple>
					<option>SAR</option>
				  </select>
				</div>
				</div>
					
			</div>
			<div class="row">	
		 @foreach ($books as $book)
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="{{ route('book.detail',['id'=>$book->id, 'book_name'=>$book->title]) }}">
								<img class="pic-1"  src="{{ asset('book_photo/'.$book->photo) }}">
								<img class="pic-2"  src="{{ asset('book_photo/'.$book->photo) }}">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
							<span class="product-new-label">New</span>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="{{ route('book.detail',['id'=>$book->id, 'book_name'=>$book->title]) }}">{{ $book->title }}</a></h3>
							<div class="price">
								{{ $book->price }} Tk.
								{{-- <span>$75.00</span> --}}
							</div>
							<ul class="rating">
								@php $rating = $book->review->avg('rating'); @endphp  
								@foreach(range(1,5) as $i)
						<span class="fa-stack " style="width:1em">
							<i class="fa fa-star-o fa-stack-1x "></i>

							@if($rating >0)
								@if($rating >0.5)
									<i class="fa fa-star fa-stack-1x"></i>
								@else
									<i class="fa fa-star-half fa-stack-1x"></i>
								@endif
							@endif
							@php $rating--; @endphp
						</span>
            @endforeach
                        ({{ $book->review->avg('rating') }})
					</ul>
					
                </div>
            </div>
		</div>
		@endforeach
	
	
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