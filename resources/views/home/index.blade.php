@extends('layout.master')


@section('content')

 
@component('layout.header')
     
@endcomponent

 @component('section.home.slider')
     
 @endcomponent

 @component('section.home.course',['CourseLists'=>$CourseLists])
   
 @endcomponent

 
 @component('section.home.stepstudy')
     
 @endcomponent


 @component('section.home.instructor')
     
 @endcomponent

 @component('section.home.lecturer')
     
 @endcomponent

 @component('section.home.partner')
     
 @endcomponent


 @component('section.home.successMethod')
     
 @endcomponent

 @component('section.home.seller')
     
 @endcomponent
 
 @component('section.home.contactus')
     
 @endcomponent


 @component('layout.footer')
     
 @endcomponent
 
 

 <script src="js/swiperresponsive.min.js" ></script>

@endsection