<style>
    .list-group-item {
        border: unset;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;

    }
</style>

<h4>บทเรียน</h4>
 
 

 
@if($LessonOfSingleCourses) <!--I2-->

@foreach ($LessonOfSingleCourses as $key => $LessonOfSingleCourse) <!--f1-->

<div class="list-group">

        <a   class="list-group-item list-group-item-action active" style="background-color:#ffb606;border-color:#ffb606;">
           
            @if($LessonOfSingleCourse['name_title'])
           <b>{{$LessonOfSingleCourse['name_title']}}</b>
            @endif
        </a>

@foreach ($LessonOfSingleCourses[$key] as  $item)<!--f2-->
@if($LessonOfSingleCourse['name_title'] != $item)
        <a   class="list-group-item list-group-item-action" role="button"
         href="{{ route('user.singlecourse.lesson',['id_course'=>$id_course,'id_lesson'=>$item]) }}">
                <i class="fas fa-book" style="margin-right:15px;color:grey;"  ></i>
            {{$item}}
        </a>
        @endif
        @endforeach<!--f2-->
      </div>
 

      @endforeach <!--f1-->

      
      @endif<!--I2-->