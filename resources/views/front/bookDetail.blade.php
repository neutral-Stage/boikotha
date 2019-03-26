@extends('front.layouts.master')

@section('content')
	

<div class="main-body section-gap">
<div class="container box_1170">

  <!-- Portfolio Item Heading -->
  

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-6">
      <img class="img-fluid" src="{{ asset('book_photo/'.$book->photo) }}" width="400" height="600" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">{{ $book->title }}</h3>
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
      <span class="border-top my-3 "><hr></span>
    <div class="bookdes">
      <ul >
        <li style="padding: 3px 0px;">Publisher: {{ $book->publisher }}</li>
        <li style="padding: 3px 0px;">Age group: {{ $book->age }}</li>
        <li style="padding: 3px 0px;">Author/s: {{ $book->author }}</li>
        <li style="padding: 3px 0px;">Illustrator: {{ $book->illustrator }}</li>
        <li style="padding: 3px 0px;">ISBN: {{ $book->isbn }}</li>
        <li style="padding: 3px 0px;">Publication date (1st): {{ $book->public_date }}</li>
       
      </ul>
      <a href="#review" class="genric-btn primary radius">Read A Review</a>
    </div>
    </div>

  </div>
  <!-- /.row -->

 

</div>
</div>

<div class="whole-wrap">
		<div class="container box_1170">
                  @foreach($book->review as $rvw)
                          @foreach($reviews as $r)
                            @if($r->id == $rvw->reviewer_id) 
                  <div class="section-top-border shadow p-3 mb-5 bg-white rounded" id="review">
                       
                        <div class="row ">
                          <div class="col-md-2">
                            <img src="{{ asset('reiviewer_photo/'.$r->photo) }}" alt="" class="img-fluid">
                            <p  style="font-size: 14px;margin-top:5px;">{{ $r->name }}</p>
                          </div>
                           
                            @endif
                          @endforeach
                          
                          <div class="col-md-8 mt-sm-20">
                            <h3>{{ $rvw->title }}</h3>
                            <div>{!! $rvw->des !!} </div>
                          </div>
                          
                          
                          <div class="col-md-2 mt-sm-20">
                          <li class="list-group-item">@php $rating = $rvw->rating; @endphp  
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
                    </div>
                  </div>
<!-- /.container -->


@endsection