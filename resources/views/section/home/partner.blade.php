<style>
    .swiper-partner {
margin-top:30px;
        top: 0px;
    }

    .d-slide-partner {

       /* border: 1px solid #e5e5e5;*/
    }

    .container-partner {
        margin-bottom: 100px;

    }

    .somewrapper-partner {
        position: relative;
    }

    .sharp {
        border-radius: 0;

    }

    .btn-next-partner {
        position: unset;
        background-image: unset;
        width: 45px!important;
        margin-bottom: 10px!important;
        margin-right: -50px;
        margin-top: 20px!important;
        border: unset;
    }

   
    .btn-prev-partner {
        position: unset;
        background-image: unset;
        width: 45px!important;
        margin-bottom: 10px!important;
        margin-left: -50px;
        margin-top: 20px!important;
        border: unset;
        border: none;
    outline:none;
    }

  


    /* Extra small devices (phones, 600px and down) */

    @media only screen and (max-width: 600px) {
        .container-partner {
        margin-bottom: 50px!important;

    }
    }


    /* Small devices (portrait tablets and large phones, 600px and up) */

    @media only screen and (min-width: 600px) {}

    /* Medium devices (landscape tablets, 768px and up) */

    @media only screen and (min-width: 768px) {
        .btn-next-partner,
        .btn-prev-partner {
            display: none;
        }

 



    }


    /* Large devices (laptops/desktops, 992px and up) */

    @media only screen and (min-width: 992px) {}

    /*end*/

    /* Extra large devices (large laptops and desktops, 1200px and up) */

    @media only screen and (min-width: 1200px) {

        .btn-next-partner,
        .btn-prev-partner {
            display: unset;
        }
        button.btn-prev-partner:hover{
            background-color:white!important;
    }
    button.btn-next-partner:hover{
        background-color:white!important;
    }


    }
</style>


<div class="container container-partner">

    <h3>พาร์ทเนอร์ของเรา</h3>

    <div class="someWrapper-partner">

        <button class="swiper-button-next btn-next-partner btn btn-default sharp pull-right"  >
            <i class="fas fa-angle-right" style="font-size:28px;color:whitesmoke;">
            </i>
        </button>

        <button class="swiper-button-prev btn-prev-partner btn btn-default sharp pull-left">
                <i class="fas fa-angle-left" style="font-size:28px;color:whitesmoke;">
                </i>
            </button>


        <div class="swiper-container swiper-partner">


            <div class="swiper-wrapper">


                <?php
    for ($i=0; $i < 6; $i++) { 
       
    ?>

                    <div class="swiper-slide d-slide-partner" style="display:unset!important;text-align:center;">

                        <img src="image/logo-madrin.png" style="width:50%;">




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
    
    slidesPerView_Partner = 5;
    
    }
    if (window.innerWidth <= 667) {  
    
    slidesPerView_Partner = 3;
    
    }
    
    var swiper = new Swiper('.swiper-partner', {
              slidesPerView: slidesPerView_Partner,
              spaceBetween: 0,
              loop: true,
              navigation: {
            nextEl: '.swiper-button-next.btn-next-partner',
            prevEl: '.swiper-button-prev.btn-prev-partner',
          },
            });

 
     
       
        
         // end window.onresize
    </script>

</div>