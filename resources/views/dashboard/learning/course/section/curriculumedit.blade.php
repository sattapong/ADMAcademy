<script src="{{ URL::to('js/jquery-3.3.1.min.js') }}">

</script>

<script src="{{ URL::to("Sortable/jquery.sortable.js ") }}"></script>

<script>
    $(function() {
      
        var AmountTitleLesson = ($(".fa-down-lesson").length - 1); //remove of element hided
 
 

$("#CloneLessonMain").attr("CheckTitle",AmountTitleLesson);

        sortableAfterClone();
  
  

    }); // end function


 
  
    $(document).on('click','.trash',function(){
      var No_list = $('.trash').index(this);

$('.li-contain-li-lesson:eq('+No_list+')').remove();

});


function CreateLessonMain()
{

   // var AmountTitleLesson = $(".fa-down-lesson").length;

    var AmountTitleLessonX = $("#CloneLessonMain").attr("CheckTitle");
 
 

$("#accordion-in").clone().attr("id","accordion-in"+(AmountTitleLessonX)).attr("style","display:show").insertBefore($('#accordion-in'));

$("#accordion-in"+AmountTitleLessonX+" .btn-clone").attr('onClick','CloneLesson('+AmountTitleLessonX+')');
$("#accordion-in"+AmountTitleLessonX+" .d-define-af-bf").addClass('cloned'+AmountTitleLessonX);
 
$("#accordion-in"+AmountTitleLessonX+" .name_title_lesson").addClass('cloned'+AmountTitleLessonX);
$("#accordion-in"+(AmountTitleLessonX)+" .name_title_lesson.cloned"+AmountTitleLessonX).attr('name','dropdown_lesson['+(AmountTitleLessonX)+'][name_title]');
$("#accordion-in"+(AmountTitleLessonX)+" #li-contain-li-lesson").removeClass('li-contain-li-lesson')

$("#accordion-in"+(AmountTitleLessonX)+" .collapse-in").attr("id","collapseOnex"+(AmountTitleLessonX)).attr("data-parent","#accordion-in"+(AmountTitleLessonX));
$("#accordion-in"+(AmountTitleLessonX)+" .btn.btn-link").attr("data-target","#collapseOnex"+(AmountTitleLessonX));

$("#accordion-in"+(AmountTitleLessonX)+" .fa-down-lesson").attr("data-target","#collapseOnex"+(AmountTitleLessonX));
$("#accordion-in"+(AmountTitleLessonX)+" .d-cloned").attr("id","d-cloned"+(AmountTitleLessonX));

AmountTitleLessonX++;
$("#CloneLessonMain").attr("CheckTitle",AmountTitleLessonX);

sortableAfterClone();


} // end CreateLessonMain

function sortableAfterClone()
{
    $('.sortable').sortable();
      $('.handles').sortable({
        handle: 'span',
      
      });
 
}

function RemoveLessonCloned(index){
 
var AmountTitleLesson = $('.trash-title').index(index);
 
$('.accordion-in:eq('+AmountTitleLesson+')').remove();
sortableAfterClone();

 

} // end CloneLesson


function CloneLesson(number){

 

$("#li-contain-li-lesson").clone().addClass("li-contain-li-lesson"+number).insertBefore($(".d-define-af-bf.cloned"+number));


 $("#accordion-in"+number+" .li-contain-li-lesson"+number+" select").attr('name','dropdown_lesson['+number+'][]');
 
 
   sortableAfterClone();

} // end CloneLesson

</script>

<style>
    #features {
        margin: unset;
        width: 460px;
        font-size: 0.9em;
    }

    .connected,
    .sortable,
    .exclude,
    .handles {
        margin: auto;
        padding: 0;
        width: 650px;
        /* default 310*/
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .sortable.grid {
        overflow: hidden;
    }

    .connected li,
    .sortable li,
    .exclude li,
    .handles li {
        list-style: none;
        border: 1px solid #CCC;
        background: #F6F6F6;
        font-family: "Tahoma";
        color: grey;
        margin: 5px;
        /* padding: 5px;  */
        /*height: 22px;*/
    }

    .handles span {
        cursor: move;
    }

    li.disabled {
        opacity: 0.5;
    }

    .sortable.grid li {
        line-height: 80px;
        float: left;
        width: 80px;
        height: 80px;
        text-align: center;
    }

    li.highlight {
        background: #FEE25F;
    }

    #connected {
        width: 440px;
        overflow: hidden;
        margin: unset;
    }

    .connected {
        float: left;
        width: 200px;
    }

    .connected.no2 {
        float: right;
    }

    li.sortable-placeholder {
        border: 1px dashed #CCC;
        background: none;
    }

    .dropdown-lesson {
        border: none;
        background-color: #F6F6F6;
        width: 100%;
        padding-left: 0px;
        height: 40px;
        outline-width: 0;
    }
</style>
 
<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0" style="style=text-align: left;">
                <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                    style="padding-left:0px;">
                        <span style="font-weight:bold;">Curriculum</span> 
                  </a>
               <!-- <i class="fas fa-caret-down pull-right" style="transform:translate(50%, 50%);cursor: pointer;" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne"></i>-->
                    <i class="fas fa-plus pull-right push-title " id="CloneLessonMain" style="transform:translate(50%, 50%);cursor:pointer;" onclick="CreateLessonMain()"  ></i>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

        





 @if($ar_AmountLesson)

 @php
     $i = 0;
 @endphp
 
@foreach($ar_AmountLesson as $key => $value)
 

<!-- Begin Old data -->

        <div id="accordion-in{{$i}}" style="" class="accordion-in">
    <div class="card" style="margin-bottom:unset;">
        <div class="card-header" id="headingOne" style="background-color:aliceblue;">
            <h5 class="mb-0">
            <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOnex{{$i}}" aria-expanded="true" aria-controls="collapseOnex{{$i}}">
<i class="fas fa-bars"></i>   
                </a> <input type="text" value="{{$ar_AmountLesson[$key]["name_title"]}}" 
                name="dropdown_lesson[{{$i}}][name_title]" class="name_title_lesson"
                 placeholder="ระบุชื่อ" style="border: none;background-color: aliceblue;"> 

<i class="fas fa-trash-alt col-md-1 trash-title pull-right" 
style="transform:translate(50%, 50%);color:#a00;cursor:pointer;"
onclick="RemoveLessonCloned(this)"
>
</i>

<i class="fas fa-caret-down pull-right fa-down-lesson" style="transform:translate(150%, 50%);cursor: pointer;" data-toggle="collapse" data-target="#collapseOnex{{$i}}"
                    aria-expanded="true" aria-controls="collapseOnex{{$i}}"></i>
                    
            </h5>
        </div>

    <div id="collapseOnex{{$i}}" class="collapse show collapse-in" aria-labelledby="headingOne" data-parent="#accordion-in{{$i}}" style="padding:15px;">
            <section>


                <ul class="handles list">


                    

                    <div style="display:none;" class="d-cloned"  >
                    <li style="width:100%;" id="li-contain-li-lesson" class="li-contain-li-lesson">

                            <span class="col-md-1">:: </span>
                            <select class="col-md-10 dropdown-lesson " name="select_clone">
                                @foreach ($LessonLists as $LessonList)
<option value="{{$LessonList->title}}">     
{{$LessonList->title}}
</option>

@endforeach

    </select>
                            <i class="fas fa-trash-alt col-md-1 trash" style="color:#a00;cursor:pointer;"></i>

                        </li>
                    </div>


              
<!-- Begin sub in -->
@if(count($ar_AmountLesson[$key]) > 0)

    @php $count = 0; @endphp
 
 @foreach ($ar_AmountLesson[$key] as $type) 
  
 @if($count != 0)
 
      
 
                  
                <li style="width:100%;" id="li-contain-li-lesson" 
                class="li-contain-li-lesson  key-num-{{$i}}-{{$count}}"
                numberOf="{{$key}}"
                >

                            <span class="col-md-1">:: </span>
                            <select class="col-md-10 dropdown-lesson " name="dropdown_lesson[{{$i}}][]">
                                @foreach ($LessonLists as $LessonList)
<?php

 if($LessonList->title == $type)
    $selected = "selected";
 else  
     $selected = "";
   
 ?>

<option value="{{$LessonList->title}}" {{$selected}}>     
{{$LessonList->title}}
</option>

@endforeach

    </select>
                            <i class="fas fa-trash-alt col-md-1 trash" style="color:#a00;cursor:pointer;"></i>

                        </li>
                 
@endif

  @php  $count+= count($type)  @endphp 

   @endforeach

   @endif

   <div class="d-define-af-bf cloned{{$i}}">   </div>
<!-- End sub in -->
                    


                </ul>


                
<div>
                <input type="button" 
                class="btn btn-primary btn-sm btn-clone" 
                value="เพิ่ม" 
                style="margin-left:40px;"
                onclick="CloneLesson({{$i}})"
                >
            </div>
            </section>



        </div>



    </div>


</div>
<!-- end Old Data  -->
  @php
      $i++;
  @endphp
@endforeach

 @endif



    <!-- Begin in -->

    <div id="accordion-in" style="display:none;" class="accordion-in">
        <div class="card" style="margin-bottom:unset;">
            <div class="card-header" id="headingOne" style="background-color:aliceblue;">
                <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOnex" aria-expanded="true" aria-controls="collapseOnex">
<i class="fas fa-bars"></i>   
</a> <input type="text"  name="name_title_lesson" class="name_title_lesson" placeholder="ระบุชื่อ" style="border: none;background-color: aliceblue;"> 

<i class="fas fa-trash-alt col-md-1 trash-title pull-right" 
style="transform:translate(50%, 50%);color:#a00;cursor:pointer;"
onclick="RemoveLessonCloned(this)"
>
</i>

                    <i class="fas fa-caret-down pull-right fa-down-lesson" style="transform:translate(150%, 50%);cursor: pointer;" data-toggle="collapse" data-target="#collapseOnex"
                        aria-expanded="true" aria-controls="collapseOnex"></i>
                        
                </h5>
            </div>

            <div id="collapseOnex" class="collapse show collapse-in" aria-labelledby="headingOne" data-parent="#accordion-in" style="padding:15px;">
                <section>


                    <ul class="handles list">

                    <div style="display:none;" class="d-cloned">
                            <li style="width:100%;" id="li-contain-li-lesson" class="li-contain-li-lesson">

                                <span class="col-md-1">:: </span>
                                <select class="col-md-10 dropdown-lesson " name="select_clone">
                                    @foreach ($LessonLists as $LessonList)
<option value="{{$LessonList->title}}">     
    {{$LessonList->title}}
</option>

@endforeach

        </select>
                                <i class="fas fa-trash-alt col-md-1 trash" style="color:#a00;cursor:pointer;"></i>

                            </li>
                        </div>


                 
                        <div class="d-define-af-bf">   </div>
                    </ul>


                    
<div>
                    <input type="button" 
                    class="btn btn-primary btn-sm btn-clone" 
                    value="เพิ่ม" 
                    style="margin-left:40px;"
                     
                    >
                </div>
                </section>



            </div>



        </div>


    </div>
    <!-- end in -->









        </div>
    </div>


</div>