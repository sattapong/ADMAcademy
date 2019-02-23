<style>
    .swiper-course {

        top: 0px;
    }

    .d-slide-course {
        border: 1px solid #e5e5e5;
    }

 

    .container-course {
        margin-bottom: 100px;

    }

    .somewrapper {
        position: relative;
    }

    .sharp {
        border-radius: 0;

    }

 
    .t-subject {
        text-align: center;
        margin-top: 40px;
        margin-bottom: 40px;
    }



    /* Extra small devices (phones, 600px and down) */

    @media only screen and (max-width: 600px) {

        .d-slide-course {
            height: 320px!important;
        }
     
        .swiper-button-next,.swiper-button-prev{
            display: none;
        }

        .d-slide-course {
            height: 350px!important;
        }

    }


    /* Small devices (portrait tablets and large phones, 600px and up) */

    @media only screen and (min-width: 600px) {

       
        .d-slide-course {
            height: 400px!important;
        }

    }

    /* Medium devices (landscape tablets, 768px and up) */

    @media only screen and (min-width: 768px) {
        .d-slide-course {
            height: 350px!important;
        }

    }


    /* Large devices (laptops/desktops, 992px and up) */

    @media only screen and (min-width: 992px) {

        .d-slide-course {
            height: 410px!important;
        }
    }

    /*end*/

    /* Extra large devices (large laptops and desktops, 1200px and up) */

    @media only screen and (min-width: 1200px) {

        .d-slide-course {
            height: 410px!important;
        }

     

       

    }
</style>


<div class="container container-course">

    <h3>คอร์สเรียนของเรา</h3>

    <div class="someWrapper">

        <button class="swiper-button-next btn-next-course btn btn-default sharp pull-right" style="position:unset;background-image:unset;width:45px!important;margin-bottom:10px!important;">
            <i class="fas fa-angle-right" style="font-size:18px;">
            </i>
        </button>

        <button class="swiper-button-prev btn-prev-course btn btn-default sharp pull-right" style="position:unset;background-image:unset;width:45px!important;margin-bottom:10px!important;margin-right:10px;">
                <i class="fas fa-angle-left" style="font-size:18px;">
                </i>
            </button>


        <div class="swiper-container swiper-course">


            <div class="swiper-wrapper">
             
                @foreach ($CourseLists as $CourseList)
             
              
                    <div class="swiper-slide d-slide-course" style="display:unset!important;">
<a href="{{ route('user.singlecourse',['id'=>$CourseList->id]) }}">
                        <img src="{{$CourseList->image_course}}" style="width:100%;height:260px;">
                    </a>
                    <h4 class="t-subject"><a href="{{ route('user.singlecourse',['id'=>$CourseList->id]) }}" style="text-decoration:none">{{$CourseList->title}} </a>
                   
                 
                      
                        </h4>

                        <div style="padding: 13px 13px 7px;border-top: 1px solid #e5e5e5;border-bottom: 0;font-weight: 400;font-size:14px;">

                            <div class="pull-left">
 
                                <i class="fas fa-user" style="color:grey;"></i>
                           @php
                           echo $CourseList->CountStudent;
                           @endphp
                            </div>

                            <div class="pull-right">
                                <?php
                       for ($ii=0; $ii < 5; $ii++) { 
                    ?>
                                    <i class="fas fa-star" style="color:orange;"></i>
                                    <!--<i class="fas fa-star-half-alt" ></i>-->
                                    <?php
                       }
                            ?>
                            </div>

                        </div>


                    </div>

                    @endforeach

            </div>
            <!-- Add Pagination -->

        </div>


    </div>


    <!-- Swiper JS -->
    <script src="swiper/dist/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
 
    if (window.innerWidth >= 768) {

slidesPerView_Course = 4;

}
if (window.innerWidth <= 667) {  
 
slidesPerView_Course = 2;
 

}
 

var swiper = new Swiper('.swiper-course', {
          slidesPerView: slidesPerView_Course,
          spaceBetween: 30,
          navigation: {
        nextEl: '.swiper-button-next.btn-next-course',
        prevEl: '.swiper-button-prev.btn-prev-course',
      },
        });
    
 
   
    
     // end window.onresize
    </script>

</div>