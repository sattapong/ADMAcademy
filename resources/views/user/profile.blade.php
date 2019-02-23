@extends('layout.master')
 
 
@component('layout.header')
    
@endcomponent


@section('styles')
<style>
    body {
        background: #F1F3FA;
    }

    /* Profile container */

    .profile {
        margin: 20px 0;
    }

    /* Profile sidebar */

    .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #fff;
    }

    .profile-userpic img {
        float: none;
        margin: 0 auto;
        width: 100%;
        /* height: 50%;*/
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
    }

    .profile-usertitle {
        text-align: center;
        margin-top: 20px;
    }

    .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
    }

    .profile-usertitle-job {
        text-transform: uppercase;
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
    }

    .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 6px 15px;
        margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
        margin-right: 0px;
    }

    .profile-usermenu {
        margin-top: 30px;
    }

    .profile-usermenu ul li {
        border-bottom: 1px solid #f0f4f7;
    }

    .profile-usermenu ul li:last-child {
        border-bottom: none;
    }

    .profile-usermenu ul li a {
        color: #93a3b5;
        font-size: 14px;
        font-weight: 400;
    }

    .profile-usermenu ul li a i {
        margin-right: 8px;
        font-size: 14px;
    }

    .profile-usermenu ul li a:hover {
        background-color: #fafcfd;
        color: #5b9bd1;
    }

    .profile-usermenu ul li.active {
        border-bottom: none;
    }

    .profile-usermenu ul li.active a {
        color: #5b9bd1;
        background-color: #f6f9fb;
        border-left: 2px solid #5b9bd1;
        margin-left: -2px;
    }

    /* Profile Content */

    .profile-content {
        padding: 20px;
        background: #fff;
        min-height: 443px;
    }

    .radius-none {
        border-radius: 0px;
        border: 1px solid aliceblue;
    }
</style>
@endsection
 
@section('scripts')

<script src="{{ URL::to("node_module/ckeditor/ckfinder/ckfinder.js ") }}"></script>

<script>
    $('document').ready(function(){

    $(".navbar-default").css('position','relative');

 
  
   
   }); // end document

   function removeImageProfile()
   {
    $(".d-image").hide();
 $("#ckfinder-popup-2").show();
 $("#ckfinder-input-1").val('');
 $("#ckfinder-popup-1").attr("src","");
   }

</script>
@endsection
 
@section('content')

<form action="{{ route('user.updateprofile',['id' =>  Auth::user()->id ]) }}" method="post">


<div class="container">

    @if(session()->has('success'))

    <div class="col-md-12">
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    </div>

    @endif 
    
    @if (count($errors) > 0)
    <div class="col-md-12">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif



    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- BEGIN SIDEBAR USERPIC -->
                <div class="profile-userpic">

                
             


                    <div>

                            @if(Auth::user()->ImageProfile)

                            <?php 
                            $display = "display:show;";  
                          $displayBtnUpImg = "display:none;"; 
                          ?>

                            @else
                            <?php 
                            $display = "display:none;";  
                              $displayBtnUpImg = "display:block;" ;
                              ?>
                            @endif


                        
                    <input type="text" id="ckfinder-input-1" name="ImageProfile" value="{{Auth::user()->ImageProfile}}" hidden>

                            <div class="d-image" style="text-align:center;{{$display}}">
                                <a href="#X" role="button">

                                   
                            <img class="blah" src="{{ Auth::user()->ImageProfile }}"   id="ckfinder-popup-1" style="width:100%;height:200px;">
                        </a>
                                <a href="#X" style="color:red;text-align:center;" class="remove-image" onclick="removeImageProfile()">remove</a>
                            </div>
                            <div style="margin-left:auto;margin-right:auto;width:50%;">
                        <input type="button" class="btn btn-default btn-upload-image" 
                        id="ckfinder-popup-2" value="Upload Image"
                         style="width:100%;{{$displayBtnUpImg}}"
                         >
                        </div>
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




                </div>
                <!-- END SIDEBAR USERPIC -->


                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{ Auth::user()->firstname.' '.Auth::user()->lastname }}
                    </div>
                    <div class="profile-usertitle-job">
                        Developer
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->



                <!-- BEGIN SIDEBAR BUTTONS -->

                <!--
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
            -->

                <!-- END SIDEBAR BUTTONS -->


                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="">
                            <a href="{{ route('home') }}">
                                    <i class="fas fa-home"></i>
							หน้าหลัก </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                    <i class="fas fa-user"></i>
							ข้อมูลส่วนตัว </a>
                        </li>

                        <li>
                            <a href="{{ route('user.logout') }}">
                                    <i class="fas fa-power-off"></i>
							ออกจากระบบ </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>


        <div class="col-md-9">



                <div class="profile-content">

                    <div class="col-md-2">
                        ชื่อ
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="{{ Auth::user()->firstname }}" name="firstname" class="form-control radius-none" placeholder="ระบุชื่อ"
                                required>
                        </div>
                    </div>

                    <div class="col-md-2">
                        นามสกุล
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="{{ Auth::user()->lastname }}" name="lastname" class="form-control radius-none" placeholder="ระบุนามสกุล"
                                required>
                        </div>
                    </div>



                    <div class="col-md-2" style="padding-right:0px;">
                        ชื่อผู้ใช้
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="{{ Auth::user()->username }}" name="username" class="form-control radius-none" placeholder="ระบุชื่อผู้ใช้"
                                required>
                        </div>
                    </div>

                    <div class="col-md-2" style="padding-right:0px;">
                        อีเมล์
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="{{ Auth::user()->email }}" name="email" class="form-control radius-none" placeholder="ระบุรหัสผ่านผู้ใช้">
                        </div>
                    </div>

                    <div class="col-md-12">

                        <button class="btn btn-primary radius-none pull-right">อัพเดต</button>

                    </div>

                </div>
                @csrf
            </form>


  





    </div>
</div>
</div>
<br>
<br>
@endsection

 
 
