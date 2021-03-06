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
                                <form class="form-horizontal" method="POST" action="{{ route('store.video') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Book</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2_demo_1" tabindex="-1" aria-hidden="true" id="book_id" name="book_id">
                                       <option value="" selected>-- Select Book --</option>
                                                @foreach ($book as $b)
                                                    <option value="{{ $b->id }}">{{ $b->title }}</option>
                                                @endforeach
                                            
                                       
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Video Caption</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Title" name="caption">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">রিভিউ শিরোনাম</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Title" name="bn_caption">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Youtube URL</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="https://www.youtube.com/watch?v=[Place Here]" name="url">
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
                                        
                                        <th>Caption</th>
                                        <th>শিরোনাম</th>
                                      
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($video as $v)
                                      <tr>
                                        
                                        <td>{{ $v->caption }}</td>
                                         <td>{{ $v->bn_caption }}</td>
                                       
                                        
                                        <td>
                                            <a href="{{ route('edit.video',$v->id) }}" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ route('delete.video',$v->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
@section('script')
    {{--  <script>

    $('#book_id').on('change',function () {

        var val = $(this).val();
        if(val>=1)
        {
            $.ajax({
                type:'post',
                url:'{{route('getcategory')}}',
                data:{
                book_id:val,
                '_token':'{{csrf_token()}}'
                },
                success:function (data) {
                    var resultContainer = $('#reviewer_id');
                    var option = '', showUrl = '', token = '', number = 1;
                    data.map(function(datas) {
                        option+="<option value="+datas.id+">"+datas.name+"</option>";
                    });
                    resultContainer.html(option);
                }
            })
        }
    })  --}}

</script>
@endsection