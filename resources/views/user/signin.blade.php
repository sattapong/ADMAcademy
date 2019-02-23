<script src="js/jquery-3.3.1.min.js">

</script>
<link rel="stylesheet" href="css/BootstrapCSS/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome/css/all.css">
<script src="js/BootstrapJS/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    .login-or {
        position: relative;
        font-size: 18px;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }

    .hr-or {
        background-color: #cdcdcd;
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }






    .loginBtn {
        box-sizing: border-box;
        position: relative;
        margin: 0.2em;
        padding: 0 15px 0 46px;
        border: none;
        text-align: left;
        line-height: 34px;
        white-space: nowrap;
        /*border-radius: 0.2em;*/
        font-size: 16px;
        color: #FFF;
    }

    .loginBtn:before {
        content: "";
        box-sizing: border-box;
        position: absolute;
        top: 0;
        left: 0;
        width: 34px;
        height: 100%;
    }

    .loginBtn:focus {
        outline: none;
    }

    .loginBtn:active {
        box-shadow: inset 0 0 0 32px rgba(0, 0, 0, 0.1);
    }

    /* Facebook */

    .loginBtn--facebook {
        background-color: #4C69BA;
        background-image: linear-gradient(#4C69BA, #3B55A0);

        text-shadow: 0 -1px 0 #354C8C;
        width: 100%;
        font-size: 14px;
    }

    .loginBtn--facebook:before {
        border-right: #364e92 1px solid;
        background: url('image/icon_facebook.png') 6px 6px no-repeat;
    }

    .loginBtn--facebook:hover,
    .loginBtn--facebook:focus {
        background-color: #5B7BD5;
        background-image: linear-gradient(#5B7BD5, #4864B1);
    }



    .text-box1 {
        background-color: white;
        padding: 20px;
        border: 1px solid #e6e6e6;
    }

    .text-box2 {
        background-color: white;
        padding: 20px;
        text-align: center;
        border: 1px solid #e6e6e6;
    }

    .textbox-box1 {
        border-radius: 0px;
        border: 1px solid #efefef;
        background-color: #fafafa;
        font-size: 12px;
    }
</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body style="background-color:#fafafa;">

    <div class="container" style="margin-top:20px;">

        <form action="{{ route('user.signin') }}" method="post">

            <div class="col-lg-4 col-lg-offset-4">


                <div class="col-lg-12 text-box1">

                    <h3 style="text-align:center;">ลงชื่อเข้าใช้</h3>


          
      
   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
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
                        <input type="text" class="form-control textbox-box1" placeholder="ระบุชื่อผู้ใช้" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control textbox-box1" placeholder="ระบุรหัสผ่านผู้ใช้" name="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="border-radius:0px;width:100%;">เข้าสู่ระบบ</button>
                    </div>

                    <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or" style="font-size:14px;">OR</span>
                    </div>

                    <button class="loginBtn loginBtn--facebook">
                        Login with Facebook
                      </button>
                    <div style="text-align:center;margin:20px;">
                        <a role="button" href="#" style="text-decoration:none;">ลืมรหัสผ่านผู้ใช้ ?</a>
                    </div>


                </div>


            </div>
            @csrf
        </form>

    </div>


    <div class="container" style="margin-top:20px;">
        <div class="col-lg-4 col-lg-offset-4">


            <div class="col-lg-12 text-box2">
                <div class="col-lg-12">
                    ยังไม่มีบัญชีผู้ใช้? <a href="{{ route('user.signup') }}" style="text-decoration:none;">สมัครสมาชิก</a>
                </div>
                <div class="col-lg-12" style="margin-top:10px;">
                <a href="{{ route('home') }}" style="text-decoration:none;">กลับสู่หน้าหลัก</a>
                </div>
            </div>



        </div>
    </div>
</body>