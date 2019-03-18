@extends('back.layouts.master')

@section('content')
 <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Add Reviewer</div>
                        </div>
                        <div class="ibox-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pill-1-1" data-toggle="tab" aria-expanded="false">English</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill-1-2" data-toggle="tab" aria-expanded="true">বাংলা</a>
                                </li>
                               
                            </ul>
                           
                            <div class="tab-content ">
                                <div class="tab-pane active" id="pill-1-1" aria-expanded="false">
                                    @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissable fade show mt-5">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                            <strong>Success!</strong> {{ Session::get('message') }}
                            </div>
                            @endif 
                                   <div class="ibox-body" style="">
                                <form class="form-horizontal" method="POST" action="{{ route('store.review') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Book</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" tabindex="-1" aria-hidden="true" name="book_id">
                                       
                                                @foreach ($book as $b)
                                                    <option value="{{ $b->id }}">{{ $b->title }}</option>
                                                @endforeach
                                            
                                       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Reviewer</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" tabindex="-1" aria-hidden="true" name="reviewer_id">
                                                @foreach ($enre as $en)
                                                    <option value="{{ $en->id }}">{{ $en->name }}</option>
                                                @endforeach
                                                
                                            
                                       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Review Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Title" name="title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            
                                                <textarea class="form-control" name="des" id="des" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Rating</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="1 to 5 " name="rating">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Input Type</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="type" readonly value="english">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                                </div>
                                <div class="tab-pane " id="pill-1-2" aria-expanded="true">
                                     @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissable fade show mt-5">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                            <strong>Success!</strong> {{ Session::get('message') }}
                            </div>
                            @endif
                                    <div class="ibox-body" style="">
                                <form class="form-horizontal" method="POST" action="{{ route('store.review') }}" enctype="multipart/form-data">
                                     @csrf
                                   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">বই নির্বাচন</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" tabindex="-1" aria-hidden="true" name="book_id" style="width:100%;">
                                       
                                                @foreach ($book as $b)
                                                    <option value="{{ $b->id }}">{{ $b->title }}</option>
                                                @endforeach
                                            
                                       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">রিভিউয়ার নির্বাচন</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" tabindex="-1" aria-hidden="true" name="reviewer_id" style="width:100%;">
                                                 @foreach ($bnre as $bn)
                                                    <option value="{{ $bn->id }}">{{ $bn->name }}</option>
                                                @endforeach
                                                
                                            
                                       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">রিভিউ শিরোনাম</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Title" name="title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">বিস্তারিত বর্ণনা</label>
                                        <div class="col-sm-10">
                                            
                                                <textarea class="form-control" name="des" id="bdes" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">রেটিং</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="1 to 5 " name="rating">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">ইনপুট টাইপ</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="type" readonly value="bangla">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">জমা দিন</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                                </div>
                               
                            </div>
                        </div>
                    </div>

   
<script src="{{ asset('/') }}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'des' );
    </script>
    <script>
        CKEDITOR.replace( 'bdes' );
    </script>
@endsection