@extends('front.layouts.master')

@section('content')
	
	<div class="container">
		<div class="col-md-6">
			<div class="card">

		  <img class="card-img-top" src="{{ asset('book_photo/'.$book->photo) }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Book Name: {{ $book->title }}</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		  <ul class="list-group list-group-flush">
		  	@foreach($book->review as $rvw)
		  	 @foreach($reviews as $r)
		  	 	@if($r->id == $rvw->reviewer_id) {{ $r->name }} @endif
		     @endforeach
		      <li class="list-group-item">{{ $rvw->rating }}</li>
		    @endforeach
		  </ul>
		  <div class="card-body">
		    <a href="#" class="card-link">Card link</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>
		</div>
		</div>
@endsection