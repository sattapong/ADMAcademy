

@section('footer')
<style>
    .contact-text {
        display: block;
        float: left;
        width: 30px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 2px;
        position: relative;
    }
 
</style>

 


<div class="container-footer">

    <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:black;padding:60px;color:white;">

        <div class="col-lg-3">
        <img src="{{ URL::to('image/logo-adm.jpg') }}" style="width:100%;">
        </div>

 



        <div class="col-lg-2 ">

            <h5 style="font-weight:bold;margin-top:0px;margin-bottom:30px;">CONTACT US</h5>

            <div style="margin-bottom:10px;">
                <div class="contact-text">
                    <i class="fas fa-map-marker-alt" style="margin-right:10px;color:#999;"></i>
                </div>
                <div style="display: block;
                margin-left: 35px;">
                    <span style=" color:#999;font-size:12px;">
                    1600 Amphitheatre Parkway
                    Mountain View CA 94043
                    
             </span>
                </div>

            </div>


            <div style="margin-bottom:10px;">
                <div class="contact-text">
                    <i class="fas fa-phone " style="margin-right:10px;color:#999; "></i>

                </div>
                <div style="display: block;
                    margin-left: 35px;">
                    <span style=" color:#999;font-size:12px;">
           09-10181810
                        
                 </span>
                </div>

            </div>





            <div style="margin-bottom:10px;">
                    <div class="contact-text">
                            <i class="far fa-envelope " style="margin-right:10px;color:#999; "></i>
    
                    </div>
                    <div style="display: block;
                        margin-left: 35px;">
                        <span style=" color:#999;font-size:12px;">
                                admin@education-lms.com
                            
                     </span>
                    </div>
    
                </div>
    

                <div style="margin-bottom:10px;">
                        <div class="contact-text">
                                <i class="fas fa-fax " style="margin-right:10px;color:#999; "></i>
        
                        </div>
                        <div style="display: block;
                            margin-left: 35px;">
                            <span style=" color:#999;font-size:12px;">
                                    FAX: (123) 123-4567
                                
                         </span>
                        </div>
        
                    </div>
        


 


        </div>






        <div class="col-lg-3 col-lg-offset-1 ">
                <h5 style="font-weight:bold;margin-top:0px;margin-bottom:30px;">LINKS</h5>

          <div style="margin-bottom:10px;color:#999">หน้าหลัก</div>
          <div style="margin-bottom:10px;color:#999">คอร์สของเรา</div>
          <div style="margin-bottom:10px;color:#999">ทีมงานของเรา</div>
          <div style="margin-bottom:10px;color:#999">เกี่ยวกับเรา</div>
          <div style="margin-bottom:10px;color:#999">ติดต่อเรา</div>
          <div style="margin-bottom:10px;color:#999">ลงทะเบียน</div>
          
        </div>













        <div class="col-lg-3 ">
                <h5 style="font-weight:bold;margin-top:0px;margin-bottom:30px;">OPEN HOURS</h5>

                <div style="margin-bottom:10px;color:#999">Our support available to help you 24 hours a day, seven days a week.</div>
                 
        </div>






    </div>

</div>

@endsection