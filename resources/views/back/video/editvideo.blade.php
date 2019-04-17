@extends('back.layouts.master')

@section('content')
 <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Add Reviewer</div>
                        </div>
                        <div class="ibox-body">
                    
                              
                                    @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissable fade show mt-5">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                            <strong>Success!</strong> {{ Session::get('message') }}
                            </div>
                            @endif 
                                   <div class="ibox-body" style="">
                                <form class="form-horizontal" method="POST" action="{{ route('update.video',$video->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Book</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" tabindex="-1" aria-hidden="true" name="book_id">
                                       
                                                @foreach ($book as $b)
                                                   
                                                    <option value="{{ $b->id }}"  {{ $video->book_id == $b->id  ? 'selected="selected"' : '' }}>{{ $b->title }}</option>
                                                @endforeach
                                            
                                       
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Video Caption</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Title" name="caption" value="{{ $video->caption }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">রিভিউ শিরোনাম</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Title" name="bn_caption" value="{{ $video->bn_caption }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Youtube URL</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="https://www.youtube.com/watch?v=[Place Here]" name="url" value="{{ $video->url }}">
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </div>
                                    </div>
                                    
                                    
                                </form>
                            </div>
                                
                                
                               <a href="{{ route('add.video') }}" class="btn btn-primary "><i class="fa fa-arrow-circle-left"></i> Back</a>  
                               
                           
                        </div>
                    </div>
    @endsection