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
                                <form class="form-horizontal" method="POST" action="{{ route('store.reviewer') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">নাম</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="bn_name">
                                        </div>
                                    </div>
                                    
                                   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            
                                                <textarea class="form-control" name="des" id="des" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">বিস্তারিত</label>
                                        <div class="col-sm-10">
                                            
                                                <textarea class="form-control" name="bn_des" id="bdes" cols="30" rows="10"></textarea>
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
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                             
                               
                               
                            
                        </div>
                    </div>



                                            {{--  Table Table  --}}


                    <div class="ibox">
                    <div class="ibox-body">
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-7-1"><div class="ibox-head">
                        <div class="ibox-title">Reviewers Table</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>নাম</th>

                                        <th>Photo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviewer as $en)
                                      <tr>
                                        
                                        <td>{{ $en->name }}</td>
                                         <td>{{ $en->bn_name }}</td>
                                        <td><img class="img-thumbnail" src="{{ asset('reiviewer_photo/'.$en->photo) }}"></td>
                                        
                                        <td>
                                            <a href="{{ route('edit.reviewer',$en->id) }}" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ route('delete.reviewer',$en->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>  
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div></div>
                                 
                                </div><br></div>
                    
                    </div>
                
<script src="{{ asset('/') }}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'des' );
    </script>
    <script>
        CKEDITOR.replace( 'bdes' );
    </script>
@endsection