<style>
    .swiper-instructor {

        top: 0px;
    }

    .d-slide-instructor {
       
        border: 1px solid #e5e5e5;
    }

    .container-instructor {
        margin-bottom: 100px;

    }

    .somewrapper {
        position: relative;
    }

    .sharp {
        border-radius: 0;

    }

    .btn-next-instructor {
        position: unset;
        background-image: unset;
        width: 45px!important;
        margin-bottom: 10px!important;
        margin-right: -50px;
        margin-top: 150px!important;
    }

    .btn-prev-instructor {
        position: unset;
        background-image: unset;
        width: 45px!important;
        margin-bottom: 10px!important;
        margin-left: -50px;
        margin-top: 150px!important;
    }

    .text-instructor {
        font-size: 14px;
        padding: 10px;
        text-align: left!important;
        color: #7a7a7a;
        display: block;
        display: -webkit-box;
        max-width: 400px;
        height: 70px;
        margin: 0 auto;
    
        line-height: 1.4;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    /* Extra small devices (phones, 600px and down) */

    @media only screen and (max-width: 600px) {}


    /* Small devices (portrait tablets and large phones, 600px and up) */

    @media only screen and (min-width: 600px) {}

    /* Medium devices (landscape tablets, 768px and up) */

    @media only screen and (min-width: 768px) {
        .btn-next-instructor,
        .btn-prev-instructor {
            display: none;
        }

        .d-slide-instructor {
            height: 300px!important;
        }
    }


    /* Large devices (laptops/desktops, 992px and up) */

    @media only screen and (min-width: 992px) {}

    /*end*/

    /* Extra large devices (large laptops and desktops, 1200px and up) */

    @media only screen and (min-width: 1200px) {

        .btn-next-instructor,
        .btn-prev-instructor {
            display: unset;
        }

        .d-slide-instructor {
            height: 400px!important;
        }

    }
</style>


<div class="container container-instructor">

    <h3>อาจารย์ผู้สอน</h3>

    <div class="someWrapper">

        <button class="swiper-button-next btn-next-instructor btn btn-default sharp pull-right" style="">
        <i class="fas fa-angle-right" style="font-size:18px;">
        </i>
    </button>

        <button class="swiper-button-prev btn-prev-instructor btn btn-default sharp pull-left">
            <i class="fas fa-angle-left" style="font-size:18px;">
            </i>
        </button>


        <div class="swiper-container swiper-instructor">


            <div class="swiper-wrapper">


<?php
for ($i=0; $i < 6; $i++) { 
   
?>

                <div class="swiper-slide d-slide-instructor" style="display:unset!important;text-align:unset;">

                    <img src="image/team3-8-480x300-5.jpg" style="width:100%;">

                    <h4 style="text-align:center;">คุณใจดี สอนผู้น้อย</h4>
                    <h5 class="text-instructor" style="">
                        text messages are used by youth and adults for personal,family, business and social purposes. Governmental business and social
                        purposes. Governmental business and social purposes. Governmental

                    </h5>

                    <h5 class="pull-right" style="padding-right:10px;">instructor</h5>

                </div>

 
<?php 
}
?>


            </div>
            <!-- Add Pagination -->

        </div>


    </div>


    <!-- Swiper JS -->
    <script src="swiper/dist/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        if (window.innerWidth >= 768) {

slidesPerViewXX = 4;

}
if (window.innerWidth <= 667) {  

slidesPerViewXX = 1;

}

var swiper = new Swiper('.swiper-instructor', {
          slidesPerView: slidesPerViewXX,
          spaceBetween: 30,
          navigation: {
        nextEl: '.swiper-button-next.btn-next-instructor',
        prevEl: '.swiper-button-prev.btn-prev-instructor',
      },
        });
    
 
   
    
     // end window.onresize
    </script>

</div>