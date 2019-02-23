@extends('dashboard.layout.master')
@section('scripts')

<script src="{{ URL::to('js/jquery-3.3.1.min.js') }}"></script>
@endsection
 
@section('styles')
<style>
    .drop-radius {
        border-radius: 2px!important;

    }

    .content {
        min-height: 600px;
    }
</style>
@endsection
 
@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">


                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">

                            <li> Leaning</li>
                            <li><a href="#">Lesson</a></li>
                            <li><a href="#">Create</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('content')



<div class="animated fadeIn">



    <!-- Left Block -->
    <div class="row">


        
      

        <form action="{{ route('admin.lessons.create') }}" method="post"  style="width:100%;">

            <div class="col-md-12">

                    @if(session()->has('success'))

        
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                
            
                @endif 

                    @if (count($errors) > 0)
         
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                
                @endif

                <div class="form-group">

                    <input type="text" class="form-control drop-radius" placeholder="ระบุชื่อบทเรียน" name="title">

                </div>


                <div class="form-group">
                <script src="{{ URL::to('node_module/ckeditor/ckeditor.js') }}"> </script>
                    <textarea class="ckeditor" name="content" id="editor1"></textarea>

                    
              
              
              <script type="text/javascript">
    {{ URL::to("node_module/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images") }}
                CKEDITOR.replace( 'editor1', {
                  filebrowserBrowseUrl: '{{ URL::to("node_module/ckeditor/ckfinder/ckfinder.html") }}',
                  filebrowserImageBrowseUrl: '{{ URL::to("node_module/ckeditor/ckfinder/ckfinder.html?Type=Images") }}',
                  filebrowserUploadUrl: '{{ URL::to("node_module/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files") }}',
                  filebrowserImageUploadUrl: '{{ URL::to("node_module/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images") }}',
                  filebrowserWindowWidth : '1000',
                  filebrowserWindowHeight : '700'
              });
               
              </script>
              

                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary drop-radius pull-right">สร้าง</button>

                </div>

            </div>
            @csrf
        </form>


    </div>
    <!-- .row -->

</div>
<!-- .animated -->
@endsection