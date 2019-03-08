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
                                <form class="form-horizontal" method="POST" action="{{ route('store.reviewer') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" placeholder="Description" name="des">
                                                </textarea>
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
                                <form class="form-horizontal" method="POST" action="{{ route('store.reviewer') }}" enctype="multipart/form-data">
                                     @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">নাম</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">বিবরণ</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control"  name="des">
                                            </textarea>
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
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                                </div>
                               
                            </div>
                        </div>
                    </div>

@endsection