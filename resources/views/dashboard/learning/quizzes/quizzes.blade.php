@extends('dashboard.layout.master') 

@section('scripts')

<script src="{{ URL::to('js/jquery-3.3.1.min.js') }}"></script>

@endsection

@section('styles')
<style>
    .drop-radius {
        border-radius: 2px!important;

    }
    .content{
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
                        <a  class="btn btn-primary radius-none" style="margin-top:5%;margin-bottom:5%;color:white;">สร้างแบบทดสอบ</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                
                                <li><a href="#">Leaning</a></li>
                            <li><a href="{{ route('admin.quizzes') }}">Quizzes</a></li>

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

        <div class="col-md-12">






            <table class="table table-bordered" style="background-color:white;">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อแบบทดสอบ</th>
                        <th scope="col">ผู้สร้าง</th>
                        <th scope="col">วันที่อัพเดต</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>

                    

    

                        <tr>
                            <td></td>
                            <td></td>
                        <td></td>
                            <td></td>
                        <td>
                        <a href="" class="btn btn-warning btn-sm drop-radius">แก้ไช</a>
 
                            <a class="btn btn-danger btn-sm drop-radius" data-href="#" data-toggle="modal" data-target="#confirm-delete">
                                    ลบ  
                                </a>
                            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                คุณแน่ใจที่จะลบใช่ไม ? 
                                            </div>
    
                                            <div class="modal-footer">
                                               
                                                    <button type="button" class="btn btn-default " data-dismiss="modal">
                                                    ยกเลิก
                                                </button>
                                                    <a  class="btn btn-danger" style="color:white;">
                                                ยืนยันลบ
                                            </a>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                       
                    </tr>
                   
                        @csrf
                    </tbody>
                <tbody>

                    

                </tbody>
            </table>



        </div>


    </div>
    <!-- .row -->

</div>
<!-- .animated -->
@endsection