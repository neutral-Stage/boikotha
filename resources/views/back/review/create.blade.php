@extends('back.layouts.master')

@section('content')

    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar margin-bottom-20">
                <ul class="page-breadcrumb pull-right">
                    <li>
                        <a href="{{ asset('/admin') }}">Question</a>
                        <i class="fa fa-angle-right"></i>
                    </li>

                </ul>
            </div>
            <!-- END PAGE BAR -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <i class="icon-pin font-green"></i>
                                <span class="caption-subject bold uppercase"> Add New Interview Question<span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            @foreach ($errors->all() as $message)
                                <div class="alert alert-warning">
                                    {{$message}}
                                </div>
                            @endforeach
                            <form role="form" method="post" action="{{route('question.store')}}" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                <input type="text" name="qus" autocomplete="off" id="question" class="form-control" >
                                                <div id="quesList">
                                                <label for="question">Question</label>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                <label for="single">Select Category </label>
                                                <select id="category" class="form-control select2 edited" name="category_id" required>
                                                    <option value="" selected>-- Select category --</option>
                                                    @foreach($categories as $category)    
                                                        <option value="{{$category->id}}">{{ $category->category}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                <label for="single">Select Subcategory </label>
                                                <select id="subCategoryContainer" class="form-control select2 edited" name="subcategory_id" required>
                                                    <option value="" selected>-- Select subCategory --</option>
                                                    @foreach($subcategories as $subCategory)    
                                                        <option value="{{$subCategory->id}}">{{ $subCategory->subcategory}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <label for="content">Answer (Use Ctrl+Shift+V command to past content)</label>
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                <textarea name="ans" class="form-control my-editor" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="input-group input-large">
                                                    <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                        <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                        <span class="fileinput-filename"> </span>
                                                    </div>
                                                    <span class="input-group-addon btn default btn-file">
                                                        <span class="fileinput-new">Upload Photo </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="photo"> </span>
                                                    <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                <div class="form-actions noborder">
                                    <button type="submit" class="btn blue">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection

@section('script')
<script>

    $('#category').on('change',function () {

        var val = $(this).val();
        if(val>=1)
        {
            $.ajax({
                type:'post',
                url:'{{route('getcategory')}}',
                data:{
                category:val,
                '_token':'{{csrf_token()}}'
                },
                success:function (data) {
                    var resultContainer = $('#subCategoryContainer');
                    var option = '', showUrl = '', token = '', number = 1;
                    data.map(function(datas) {
                        option+="<option value="+datas.id+">"+datas.subcategory+"</option>";
                    });
                    resultContainer.html(option);
                }
            })
        }
    })
</script>
<script>
$(document).ready(function(){

 $('#question').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();

         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#quesList').fadeIn();  
                    $('#quesList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#question').val($(this).text());  
        $('#quesList').fadeOut();  
    });  

});
</script>
@endsection

