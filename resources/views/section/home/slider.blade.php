<link rel="stylesheet" href="swiper/dist/css/swiper.min.css">


<style>
    .swiper-container {
        width: 100%;
        height: 100%;
        top:-20px;
    }

    .img-slider{
        height: 680px;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
</style>


<div class="swiper-container swiper-slider-main">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="image/4_Index_04.jpg" style="width:100%;" class="img-slider">
        </div>
        <div class="swiper-slide">
            <img src="image/slider1-v1a.jpg" style="width:100%;" class="img-slider">
        </div>

    </div>

       <!-- Add Pagination -->
       <div class="swiper-pagination"></div>

    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Swiper JS -->
<script src="swiper/dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-slider-main', {
        
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        slidesPerView: 'auto',
      spaceBetween: 30,
      },
    
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

    });

    
</script>