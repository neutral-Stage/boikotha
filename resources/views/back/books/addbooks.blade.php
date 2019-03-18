@extends('back.layouts.master')

@section('content')
    <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Book</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                                 @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissable fade show mt-5">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                            <strong>Success!</strong> {{ Session::get('message') }}
                            </div>
                            @endif 
                            </div>
                            <div class="ibox-body">
                               <form class="form-horizontal" method="POST" action="{{ route('store.books') }}" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Book Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Book Title" name="title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Taka" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Publisher</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Publisher" name="publisher">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Age group</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="6-15" name="age">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Author/s</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"  name="author">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Illustrator</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"  name="illustrator">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">ISBN</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"  name="isbn">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Publication date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"  name="public_date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" tabindex="-1" aria-hidden="true" name="cate">
                                       
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                      
                                       
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                       
                                    </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Photo</label>
                                        <div class="col-sm-10">
                                           <input type="file" name="image">
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

@endsection