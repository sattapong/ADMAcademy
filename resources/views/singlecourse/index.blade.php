@extends('layout.master')

@component('layout.header')
     
@endcomponent

 @section('styles')
     

<style>

body{
    padding-top: 90px;
}

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        background-color: #ffb606;
        border: unset;
    }

    background-color: #ddd;
    .nav-tabs {
        background-color: #ddd;

    }

    .nav.nav-tabs {
        background-color: #ddd;
        border-bottom: 0px;
    }

    .nav-tabs>li>a {
        border-radius: 0px;
        color: grey;
    }

    .drop-radius {
        border-radius: 2px;
    }
</style>
 @endsection

<div class="container">

    <div class="form-group row">
        <h1 style="font-weight:bold;text-align:center;">{{$CourseLists->title}}</h1>

    </div>

    <div class="form-group row">
        <div class="col-md-6 col-md-offset-3">

            <img src="{{$CourseLists->image_course}}" width="100%;height:100%;">

        </div>

    </div>

    <div class="form-group row">
        <div class="col-md-6 col-md-offset-3">

            <ul class="list-unstyled course-info row" style="text-align:center;border-top:1px solid #eaeaea;border-bottom:1px solid #eaeaea;margin-left:0px;margin-right:0px;">
                <li class="col-md-6 col-xs-6" style="padding:5px;">
                    <i class="fas fa-users" style="color:#ffb606;"></i> 
                    {{count($user_course_lists)}} students
                </li>
                <li class="col-md-6 col-xs-6" style="padding:5px;">
                    <i class="fas fa-book" style="color:#ffb606;"></i>
                     @php
                           $count = 0;
   foreach ($LessonOfSingleCourses as $item) {
    $count += (count($item)-1); // remove main key
}
 echo $count;
                     @endphp lessons
                    </li>
            </ul>

        </div>
    </div>

    <div class="form-group row">

        <div class="col-md-6 col-md-offset-3">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#menuOverview">Overview</a></li>
                @if(count($check_user_regis_course) > 0)
                <li><a data-toggle="tab" href="#menuCurriculum">Curriculum</a></li>
                @endif
                <li><a data-toggle="tab" href="#menuInstructor">Instructor</a></li>
                <li><a data-toggle="tab" href="#menuReview">Review </a></li>

            </ul>

            <div class="tab-content">

                <div id="menuOverview" class="tab-pane fade in active" style="margin-top:15px;">
                    @component('singlecourse.overview',['CourseLists' => $CourseLists]) @endcomponent
                </div>
                <div id="menuCurriculum" class="tab-pane fade">
                        @component('singlecourse.curriculum',[
                            'LessonOfSingleCourses'=> $LessonOfSingleCourses,
                            'id_course' => $CourseLists->id,
                            'CourseLists' => $CourseLists,
                            ]) 
                        @endcomponent
                </div>
                <div id="menuInstructor" class="tab-pane fade">
                        @component('singlecourse.instructor',[
                            'CourseListsAuthor' => $CourseLists->author
                        ]) 
                        @endcomponent
                </div>
                <div id="menuReview" class="tab-pane fade">
                        @component('singlecourse.review') 
                        @endcomponent

                </div>


            </div>

        </div>


    </div>

    @if(count($check_user_regis_course)
    < 1) <div class="form-group row">
        <div class="col-md-6 col-md-offset-3">

            <a href="{{ route('user.regiscourse',['id'=>$CourseLists->id]) }}" class="btn btn-warning drop-radius">ลงทะเบียน</a>

        </div>
</div>
@endif

</div>
<!--end container-->


 

<script src="{{ URL::to('js/BootstrapJS/bootstrap.min.js') }}"></script>




@component('layout.footer')
     
@endcomponent
