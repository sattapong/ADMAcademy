@extends('dashboard.layout.master') 

@section('styles')
<style>
    .radius-none {
        border-radius: 0px!important;

    }

    .content{
        min-height: 600px;
    }
</style>
@endsection
 
@section('content')

<div class="animated fadeIn">

    
<form action="{{ route('admin.addnew') }}" method="post">

    <div class="col-md-12" style="background-color:white;padding:50px;">

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

        <div class="form-group row">
            <label for="inputfirstname" class="col-sm-2 col-form-label">ชื่อ</label>
            <div class="col-sm-10">
                <input type="firstname" name="firstname" class="form-control radius-none" id="inputfirstname" placeholder="ระบุชื่อ">
            </div>
        </div>


        <div class="form-group row">
            <label for="inputlastname" class="col-sm-2 col-form-label">นามสกุล</label>
            <div class="col-sm-10">
                <input type="lastname" name="lastname" class="form-control radius-none" id="inputlastname" placeholder="ระบุนามสกุล">
            </div>
        </div>


        <div class="form-group row">
            <label for="inputusername" class="col-sm-2 col-form-label">ชื่อผู้ใช้</label>
            <div class="col-sm-10">
                <input type="username" name="username" class="form-control radius-none" id="inputusername" placeholder="ระบุชื่อ">
            </div>
        </div>


        <div class="form-group row">
            <label for="inputpassword" class="col-sm-2 col-form-label">รหัสผ่านผู้ใช้</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control radius-none" id="inputpassword" placeholder="ระบุนามสกุล">
            </div>
        </div>


        <div class="form-group row">
            <label for="inputemail" class="col-sm-2 col-form-label">อีเมล์</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control radius-none" id="inputemail" placeholder="ระบุนามสกุล">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputemail" class="col-sm-2 col-form-label">หน้าที่</label>
            <div class="col-sm-10">
                <select class="form-control radius-none" name="role">
<option>เลือก</option>
@foreach ($role as $rolename)
                  <option value="{{ $rolename->id }}">
    {{ $rolename->role_name }}
</option>
@endforeach

                  </select>
            </div>
        </div>


        <div class="form-group row">
                <label for="#" class="col-sm-2 col-form-label"> </label>
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary radius-none">สร้างผู้ใช้</button>
                </div>
            </div>

    </div>
@csrf
</form>

</div>
@endsection