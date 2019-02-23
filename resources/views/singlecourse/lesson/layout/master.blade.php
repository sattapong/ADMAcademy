

 
<script src="{{ URL::to('js/jquery-3.3.1.min.js') }}"></script>
 
<link rel="stylesheet" href="{{ URL::to('fontawesome/css/all.css') }}" >

<link rel="stylesheet" href="{{ URL::to('css/BootstrapCSS/bootstrap.min.css') }}">

<script src="{{ URL::to('js/BootstrapJS/bootstrap.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::to('css/app.responsive.css') }}" >

<style>
.d-content{
    padding-left:0px;
    padding-right:0px;
 
}
.d-sidebar-1{
    padding-left:0px;padding-right:0px;
}
.d-sidebar-2{
   /* height:100vh;*/
    border-right: 1px solid #ddd;
     height:auto;
}

</style>
 
@yield('header')
 

 

<div class="col-md-3 col-sm-3 col-xs-3 d-sidebar-1"  >
        <div class="d-sidebar-2" id="d-sidebar">

@yield('sidebar')
 

</div>      
</div>


<div class="col-md-9 col-sm-9 col-xs-9 d-content" id="d-content">
@yield('content')
</div>   


@yield('footer')