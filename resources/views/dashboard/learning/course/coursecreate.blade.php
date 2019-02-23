@extends('dashboard.layout.master') 


@section('scripts')

 

<script src="{{ URL::to("node_module/ckeditor/ckfinder/ckfinder.js ") }}"></script>
 

<script>
    $(document).ready(function(){
    $(".remove-image").click(function(){
 $(".d-image").hide();
 $("#ckfinder-popup-2").show();
 $("#ckfinder-input-1").val('');
 $("#ckfinder-popup-1").attr("src","");
});
});
    
 


</script>
 

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
                            <li><a href="#">Course</a></li>
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





        <form action="{{ route('admin.course.create') }}" method="post" style="width:100%;">

            <div class="col-md-12">

                @if(session()->has('success'))


                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>


                @endif @if (count($errors) > 0)

                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                @endif

                <div class="form-group">

                    <input type="text" class="form-control drop-radius" placeholder="ระบุชื่อคอร์ส" name="title">

                </div>


                <div class="form-group">

                    <script src="{{ URL::to('node_module/ckeditor/ckeditor.js') }}">

                    </script>

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




                <div class="form-group row">
                    <div class="col-md-9">
                            @component('dashboard.learning.course.section.curriculum',[
                                'LessonLists' => $LessonLists,
                            ])
                   @endcomponent
 
                    </div>

                    <div class="col-md-3" style="text-align:right;">

                        <div>
                            <input type="text" id="ckfinder-input-1" name="image_course" hidden>

                            <div class="d-image" style="text-align:center;display:none;">
                                <a href="#X" role="button">
                            <img class="blah" src=""   id="ckfinder-popup-1" style="width:100%;height:200px;">
                        </a>
                                <a href="#X" style="color:red;text-align:center;" class="remove-image">remove</a>
                            </div>
                            <input type="button" class="btn btn-default btn-upload-image" id="ckfinder-popup-2" value="Upload Image" style="width:100%;">

                        </div>

                        <script>
                            var buttonImage = document.getElementById( 'ckfinder-popup-1' );
 
              var button2 = document.getElementById( 'ckfinder-popup-2' );

              buttonImage.onclick = function() {
     selectFileWithCKFinder( 'ckfinder-input-1' );
 };

 button2.onclick = function() {
     selectFileWithCKFinder( 'ckfinder-input-1' );
 };
  
 
 function selectFileWithCKFinder( elementId ) {
     CKFinder.popup( {
         chooseFiles: true,
         width: 800,
         height: 600,
         onInit: function( finder ) {
             finder.on( 'files:choose', function( evt ) {
                 var file = evt.data.files.first();
                 var output = document.getElementById( elementId );
                 output.value = file.getUrl();
               $(".blah").attr("src",output.value);
               $(".d-image").show();
               $(".btn-upload-image").hide();
             } );
 
             finder.on( 'file:choose:resizedImage', function( evt ) {
                 var output = document.getElementById( elementId );
                 output.value = evt.data.resizedUrl;
          
             } );
         }
     } );
 }
                        </script>
                        <div class="form-group" style="margin-top:15px;">
                            <button type="submit" class="btn btn-primary drop-radius pull-right">สร้าง</button>

                        </div>
                    </div>
                </div>





            </div>
            @csrf
        </form>


    </div>
    <!-- .row -->

</div>
<!-- .animated -->
@endsection