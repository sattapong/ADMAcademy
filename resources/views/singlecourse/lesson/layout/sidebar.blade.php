@section('sidebar')
<style>
 

    body {
        padding-top: 90px;
    }

    .active-customize {
        border-left: 5px solid #337ab7;
    }

    /*Begin sidebar ************************************************************************************/

    .panel-default>.panel-heading{
      /*  background-color: #337ab7; */
      background-color: #ffb606;
        color: white;
        
    }
    .panel-default>.panel-heading+.panel-collapse>.panel-body{
        border-bottom:1px solid #ddd;
    }
    .panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body{
        border-top:unset;
    }
    .panel-default{
        border-color: rgba(111,111,111,0.2) transparent transparent;
    }
    .panel{
        border: unset;
    }
    .panel-heading{
        border-top-left-radius: 0px;  
     border-top-right-radius: 0px;  
    }

   /*End sidebar ************************************************************************************/
</style>

<script>
$(document).ready(function(){

 
 var ValOfAutoHeight = $('#d-sidebar').outerHeight(); // check height of sidebar
 var dContent = $('#d-content').outerHeight(); // check height of content
 var HeightOfWindow = window.innerHeight; // check height of window
 var maxHeight = Math.max(ValOfAutoHeight, HeightOfWindow, dContent); // check height of max


if(maxHeight > 764)
{
    $('#d-sidebar').css("height",maxHeight);
     
}else{
    $('#d-sidebar').css("height","100vh");

   
}

console.log("ValOfAutoHeight ="+ValOfAutoHeight);
console.log("HeightOfWindow ="+HeightOfWindow);
console.log("dContent ="+dContent);
console.log();
 

});


</script>
 



<!--
<div class="collapse in" id="SoftPc">

        <div class="list-group">
 

            <a href="#SoftPc" class="list-group-item active" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
          
                    <div style="margin-top:-2px;" class="pull-right">
                            <i class="fas fa-caret-down"></i>
                    </div>
                   
                </a>
            
            @php 
            if(url()->current() == route('user.singlecourse.lesson',['id_course'=>$CourseLists->id,'id_lesson'=>'']))
      $ActiveStatus = "active-customize";
      else
      $ActiveStatus = "";
@endphp

 

            <a href="{{ route('user.singlecourse.lesson',['id_course'=>$CourseLists->id,'id_lesson'=>'']) }}"
            class="list-group-item {{$ActiveStatus}}"></i> </i>
       
                </a> 
 
            


        </div>

    </div>


-->

 










    @foreach ($LessonOfSingleCourses as $key => $val) <!--f1-->
<div class="panel-group" id="accordion{{$key}}">

 
 
            <div class="panel panel-default">



              <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion{{$key}}" href="#collapse{{$key}}" style="text-decoration:none;">
                        {{$val['name_title']}}</a>
                </h4>
              </div>

        

            <div id="collapse{{$key}}" class="panel-collapse collapse in">

                    @foreach ($LessonOfSingleCourses[$key] as $LessonOfSingleCourse) <!--f2-->
                    @if($val['name_title'] != $LessonOfSingleCourse)<!--I2-->  
                    
                <div class="panel-body">
                        <i class="fas fa-book" style="margin-right:15px;color:grey;"  ></i>
                    <a role="button"  style="text-decoration:none;color:grey;" 
                    href="{{ route('user.singlecourse.lesson',['id_course'=>$CourseLists->id,'string_lesson'=>$LessonOfSingleCourse]) }}"
                    >
                        {{$LessonOfSingleCourse}} 
                      </a>
                </div>
                
                @endif<!--I2-->
              
                @endforeach<!--f2-->  
              </div>
        
       
        </div>

        
          </div>
          @endforeach<!--f1-->

@endsection