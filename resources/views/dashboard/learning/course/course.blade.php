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
                        <a href="{{ route('admin.course.create') }}" class="btn btn-primary radius-none" style="margin-top:5%;margin-bottom:5%;">สร้างคอร์ส</a>

                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">

                            <li><a href="#">Leaning</a></li>
                            <li><a href="#">Course</a></li>

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
                        <th scope="col" style="text-align:center;">ลำดับ</th>
                        <th scope="col" style="text-align:center;">ชื่อคอร์ส</th>
                        <th scope="col" style="text-align:center;">ผู้สร้าง</th>
                        <th scope="col" style="text-align:center;">จำนวนบทเรียน</th>
                        <th scope="col" style="text-align:center;">จำนวนผู้เรียน</th>
                        <th scope="col" style="text-align:center;">วันที่อัพเดต</th>
                        <th scope="col" style="text-align:center;">Action</th>
                    </tr>
                </thead>

                <tbody>


                    @foreach ($CourseLists as $CourseList)


                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $CourseList->title }}</td>
                        <td>{{ $CourseList->author }}</td>
                        <td>
                             @if($CourseList->id_lesson)
                            @php
                  
                         @endphp
 <span class="badge badge-pill badge-primary">
@php
  $arMulti = (unserialize($CourseList->id_lesson));
 
  $count = 0;
   foreach ($arMulti as $item) {
    $count += (count($item)-1); // remove main key
}
 echo $count;
@endphp     
 
</span>
               
                         
                            @else
<span class="badge badge-pill badge-secondary" style="background-color:#DDD;">0</span>
@endif
                        </td>
                        <td>
                            @if($CourseList->CountStudent != 0)
                            <span class="badge badge-pill badge-primary">{{ $CourseList->CountStudent }}</span>
                            @else
                            <span class="badge badge-pill badge-secondary" style="background-color:#DDD;">{{ $CourseList->CountStudent }}</span>
                            @endif
                        </td>
                        <td>{{ $CourseList->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.course.edit',['id'=> $CourseList->id]) }}" class="btn btn-warning btn-sm drop-radius">แก้ไช</a>

                            <a class="btn btn-danger btn-sm drop-radius" data-href="#" data-toggle="modal" data-target="#confirm-delete{{$CourseList->id}}">
                                    ลบ  
                                </a>
                            <div class="modal fade" id="confirm-delete{{$CourseList->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            คุณแน่ใจที่จะลบใช่ไม ?
                                        </div>

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default " data-dismiss="modal">
                                                    ยกเลิก
                                                </button>
                                            <a href="{{ route('admin.course.delete',['id'=> $CourseList->id]) }}" class="btn btn-danger" style="color:white;">
                                                ยืนยันลบ
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    @endforeach @csrf
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