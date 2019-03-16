@extends('back.layouts.master')

@section('content')
   @if ($rev->type=='bangla')
        <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Edit Reviewer</div>
                        </div>
                        <div class="ibox-body">
                            
                                    @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissable fade show mt-5">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                            <strong>Success!</strong> {{ Session::get('message') }}
                            </div>
                            @endif 
                                   <div class="ibox-body" style="">
                                <form class="form-horizontal" method="POST" action="{{ route('update.reviewer',$rev->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">নাম</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name" value="{{ $rev->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">বিবরণ</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" placeholder="Description" name="des">{{ $rev->des }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">ছবি</label>
                                        <div class="col-sm-10">
                                           <input type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Input Type</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="type" readonly value="bangla">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-success" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                               <a href="{{ route('admin.reviewer') }}" class="btn btn-primary "><i class="fa fa-arrow-circle-left"></i> Back</a>  
                        </div>
                    </div>

   @else
       <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Edit Reviewer</div>
                        </div>
                        <div class="ibox-body">
                            
                                    @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissable fade show mt-5">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                            <strong>Success!</strong> {{ Session::get('message') }}
                            </div>
                            @endif 
                                   <div class="ibox-body" style="">
                                <form class="form-horizontal" method="POST" action="{{ route('update.reviewer',$rev->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name" value="{{ $rev->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" placeholder="Description" name="des">{{ $rev->des }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Photo</label>
                                        <div class="col-sm-10">
                                           <input type="file" name="image">
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
                                            <button class="btn btn-success" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                              <a href="{{ route('admin.reviewer') }}" class="btn btn-primary "><i class="fa fa-arrow-circle-left"></i> Back</a>  
                        </div>
                    </div>

   @endif


                                            {{--  Table Table  --}}


                    
                

@endsection