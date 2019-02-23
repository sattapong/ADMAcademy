

@section('header')
<nav class="navbar navbar-default navbar-fixed-top" style="width:100%;z-index:9;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ URL::to('image/logo-adm.png') }}" class="img-logo-header"> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">

      
                <li>
                <a href="{{ route('home') }}">
            <i class=""></i> หน้าหลัก
          
          </a>
                </li>

                <li>
                    <a href="#">
            <i class=""></i> คอร์สของเรา
          
          </a>
                </li>

                <li>
                    <a href="#">
            <i class=""></i> ทีมงานของเรา
          
          </a>
                </li>

                <li>
                    <a href="#">
            <i class=""></i> เกี่ยวกับเรา
          
          </a>
                </li>

                <li>
                    <a href="#">
                <i class=""></i> ติดต่อเรา
              
              </a>
                </li>


                @if(Auth::check())

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <!-- <i class="fas fa-user"> </i> -->
                        {{ Auth::user()->username }}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">


                        <li><a href="{{ route('user.profile') }}">โปรไฟล์</a></li>
                        <li><a href="{{ route('admin.dashboard') }}">จัดการข้อมูลหลัก</a></li>
                        <li><a href="{{ route('user.logout') }}">ออกจากระบบ</a></li>
                    </ul>
                </li>
                @else

                <li><a href="{{ route('user.signin') }}">เข้าสู่ระบบ</a></li>
                @endif









            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

@endsection