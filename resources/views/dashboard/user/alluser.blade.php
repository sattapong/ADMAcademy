@extends('dashboard.layout.master') 

@section('scripts')

<script src="{{ URL::to('js/jquery-3.3.1.min.js') }}"></script>

@endsection

@section('styles')
<style>
 
    .content{
        min-height: 600px;
    }
</style>
@endsection

@section('content')



<div class="animated fadeIn">



    <!-- Left Block -->
    <div class="row">

        <div class="col-md-12">

            <table class="table table-bordered" style="background-color:white;">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">นามสกุล</th>
                        <th scope="col">หน้าที่</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($user as $userinfo)

                    <tr>
                        <td scope="row">{{ $i++ }}</td>
                        <td>{{ $userinfo->firstname }}</td>
                        <td>{{ $userinfo->lastname }}</td>
                        <td>{{$userinfo->role_name}}</td>
                        <td>
                            <a href="{{ route('admin.edituser',['id' => $userinfo->id ]) }}" class="btn btn-warning radius-none">แก้ไข</a>
                            <button class="btn btn-danger " data-href="#" data-toggle="modal" data-target="#confirm-delete{{$userinfo->id}}">
                                                            ลบ  
                                                        </button>


                            <div class="modal fade" id="confirm-delete{{$userinfo->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            คุณแน่ใจที่จะลบใช่ไม ? 
                                        </div>

                                        <div class="modal-footer">
                                           
                                                <button type="button" class="btn btn-default " data-dismiss="modal">
                                                ยกเลิก
                                            </button>
                                                <a href="{{ route('admin.removeuser',['id' => $userinfo->id ]) }}" class="btn btn-danger" style="color:white;">
                                            ยืนยันลบ
                                        </a>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>

                    @endforeach


                </tbody>
            </table>



        </div>


    </div>
    <!-- .row -->

</div>
<!-- .animated -->
@endsection