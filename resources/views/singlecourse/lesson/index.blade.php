
 @extends('singlecourse.lesson.layout.master')
 
 
 
 @component('layout.header')
     
 @endcomponent
 
                @component('singlecourse.lesson.layout.sidebar',[
                    'LessonOfSingleCourses'=>$LessonOfSingleCourses,
                    'CourseLists' => $CourseLists,
                ])
     
                @endcomponent

 
                @component('singlecourse.lesson.layout.content',[
                    'LessonActive'=>$LessonActive
                ])
     
                @endcomponent

         
 
                @component('singlecourse.lesson.layout.footer')
     
                @endcomponent
