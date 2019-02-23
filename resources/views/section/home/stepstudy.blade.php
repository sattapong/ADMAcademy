<style>
    .jumbotron-billboard .img {
        margin-bottom: 0px;
        opacity: 0.4;
        color: #fff;
        background-image: url(image/background-stepstudy.jpg);
        width: 100%;
        height: 100%;
        background-size: cover;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        background-attachment: fixed;
        background-repeat: no-repeat;

    }

    .jumbotron h4 {
        margin-top: 0;
    }

    .jumbotron {
        position: relative;
        padding-top: 50px;
        padding-bottom: 50px;
        background-color: black;
    }

    .jumbotron .container-stepstudy {
        position: relative;
        z-index: 2;
    }

    .jumbotron .container-stepstudy h4 {
        padding: 15px;
    }


    .i-check{
        margin-right: 15px;
    }

    .d-btn-regit .btn-lg{
        border-radius: 0;
        border: 1px solid;
    }
 

    
  /* Extra small devices (phones, 600px and down) */
  @media only screen and (max-width: 600px) {

    .jumbotron .container-stepstudy h4{
       font-size: 12px;
       padding-left: 25px;
       padding-top: 0px;
        }
   

} 

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
 
   
} 

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {

    .jumbotron {
            padding-top: 20px;
            padding-bottom: 20px;
        }
   
} 


    /* Large devices (laptops/desktops, 992px and up) */

    @media only screen and (min-width: 992px) {
        .btn-regis {
            margin-top: 10%;
        }
    }

    /*end*/

    /* Extra large devices (large laptops and desktops, 1200px and up) */

    @media only screen and (min-width: 1200px) {

        .btn-regis {
            margin-top: 40%;
        }

    }

 


    /* Begin Opacity Demo Styles */

    /*===========================*/
</style>

<div class="jumbotron jumbotron-billboard">
    <div class="img"></div>
    <div class="container-stepstudy">
        <div class="row" style="margin-right:0px;">
            <div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1" style="color:white;">
                <h4><img src="icon/i-check.png" class="i-check">เรียนวิธีการทำการตลาดออนไลน์</h4>
                <h4><img src="icon/i-check.png" class="i-check">สร้างไลฟ์สไตล์อย่างที่คุณต้องการใช้เวลาทำสิ่งที่คุณรัก</h4>
                <h4><img src="icon/i-check.png" class="i-check">เครื่องมือที่จัดเตรียมไว้ให้คุณเริ่มต้นธุรกิจได้อย่างรวดเร็ว</h4>
                <h4><img src="icon/i-check.png" class="i-check">คอร์สออกแแบบให้คุณสร้างรายได้หลากหลายช่องทาง</h4>
                <h4><img src="icon/i-check.png" class="i-check">เราร่วมกับยานยนต์ แบรนด์ดังระดับโลก</h4>


            </div>

            <div class="col-lg-3 d-btn-regit" style="text-align:center;" >
            <a href="{{ route('user.signup') }}" class="btn btn-warning btn-lg btn-regis">ลงทะเบียน</a>
            </div>
        </div>
    </div>

</div>