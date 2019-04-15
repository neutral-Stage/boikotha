
@extends('front.layouts.master')
	<!-- End header Area -->

	<!-- Top Stories Area -->

	@section('content')
    <div class="main-body section-gap">
    <div class="whole-wrap">
		<div class="container box_1170">
        @if(session('lang') == 'eng')
                  @foreach($reviews as $review)
                    
                  <div class="section-top-border shadow p-3 mb-5 bg-white rounded" id="review">
                       
                        <div class="row ">
                          <div class="col-md-2">
                            <img src="{{ asset('reiviewer_photo/'.$review->reviewer->photo) }}" alt="" class="img-fluid">
                            <p  style="font-size: 14px;margin-top:5px;">{{ $review->reviewer->name }}</p>
                          </div>
                           
                           
                          
                          <div class="col-md-8 mt-sm-20">
                            <h3>{{ $review->title }}</h3>
                            <div>{!! $review->des !!} </div>
                          </div>
                          
                          
                          <div class="col-md-2 mt-sm-20">
                          <li class="list-group-item">@php $rating = $review->rating; @endphp  
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
                          </li>
                          </div>

                        </div>
                      </div>
                        @endforeach
        @elseif(session('lang') == 'ban')
        @foreach($reviews as $review)
                    
                  <div class="section-top-border shadow p-3 mb-5 bg-white rounded" id="review">
                       
                        <div class="row ">
                          <div class="col-md-2">
                            <img src="{{ asset('reiviewer_photo/'.$review->reviewer->photo) }}" alt="" class="img-fluid">
                            <p  style="font-size: 14px;margin-top:5px;">{{ $review->reviewer->bn_name }}</p>
                          </div>
                           
                           
                          
                          <div class="col-md-8 mt-sm-20">
                            <h3>{{ $review->bn_title }}</h3>
                            <div>{!! $review->bn_des !!} </div>
                          </div>
                          
                          
                          <div class="col-md-2 mt-sm-20">
                          <li class="list-group-item">@php $rating = $review->rating; @endphp  
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
                          </li>
                          </div>

                        </div>
                      </div>
                        @endforeach
                        @else
                        @foreach($reviews as $review)
                    
                  <div class="section-top-border shadow p-3 mb-5 bg-white rounded" id="review">
                       
                        <div class="row ">
                          <div class="col-md-2">
                            <img src="{{ asset('reiviewer_photo/'.$review->reviewer->photo) }}" alt="" class="img-fluid">
                            <p  style="font-size: 14px;margin-top:5px;">{{ $review->reviewer->name }}</p>
                          </div>
                           
                           
                          
                          <div class="col-md-8 mt-sm-20">
                            <h3>{{ $review->title }}</h3>
                            <div>{!! $review->des !!} </div>
                          </div>
                          
                          
                          <div class="col-md-2 mt-sm-20">
                          <li class="list-group-item">@php $rating = $review->rating; @endphp  
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
                          </li>
                          </div>

                        </div>
                      </div>
                        @endforeach
                        @endif
                    </div>
                  </div>

    @endsection
