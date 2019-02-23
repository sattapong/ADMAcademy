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
                        <a href="{{ route('admin.lessons.create') }}" class="btn btn-primary radius-none" style="margin-top:5%;margin-bottom:5%;color:white;">สร้างบทเรียน</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                
                                <li><a href="#">Leaning</a></li>
                            <li><a href="{{ route('admin.lessons') }}">Lesson</a></li>

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
                        <th scope="col">ชื่อบทเรียน</th>
                        <th scope="col">ผู้สร้าง</th>
                        <th scope="col">วันที่อัพเดต</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>

                    

    @foreach ($LessonLists as $LessonList)
    

                        <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $LessonList->title }}</td>
                        <td>{{ $LessonList->author }}</td>
                            <td>{{ $LessonList->updated_at }}</td>
                        <td>
                        <a href="{{ route('admin.lessons.edit',['id' => $LessonList->id]) }}" class="btn btn-warning btn-sm drop-radius">แก้ไช</a>
 
                        <a class="btn btn-danger btn-sm drop-radius" data-href="#" data-toggle="modal" data-target="#confirm-delete{{$LessonList->id}}">
                                    ลบ  
                                </a>
                            <div class="modal fade" id="confirm-delete{{$LessonList->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                คุณแน่ใจที่จะลบใช่ไม ? 
                                            </div>
    
                                            <div class="modal-footer">
                                               
                                                    <button type="button" class="btn btn-default " data-dismiss="modal">
                                                    ยกเลิก
                                                </button>
                                            <a href="{{ route('admin.lessons.delete',['id' => $LessonList->id]) }}" class="btn btn-danger" style="color:white;">
                                                ยืนยันลบ
                                            </a>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                       
                    </tr>
                    @endforeach
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