
    <div>
        <div class="container-fluid px-lg-5" style="background-color: #000;">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-5">
                    <div>
                        <img src="assets/images/footer_logo.svg" alt="">
                    </div>
                    <div class="mt-4">
                        <p class="footer_content">
                            We are on a mission to digitally transform patient medical records accessible for both patients and hospitals, we empower people with the information available through web and mobile platforms.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-md-5 row pl-lg-5">
                    <div class="col-12 d-flex align-items-center my-3">
                        <lable class="footer_content_head">For Hospital</lable>
                    </div>
                    <div class="col-5">
                        <p><a href="./appointments" class="footer_tag"> Appointments</a></p>
                        <p><a href="./e-prescription" class="footer_tag">e-Prescriptions</a></p>
                        <p><a href="./vaccines" class="footer_tag"> Vaccines</a></p>
                        <p><a href="./implant-stents" class="footer_tag"> Implant Register</a></p>
                        <p><a href="./stents-register" class="footer_tag"> Stents Register </a></p>
                        <p><a href="./admissions" class="footer_tag"> Admissions</a></p>
                    </div>
                    <div class="col-7">
                        <p><a href="./laboratory" class="footer_tag"> Laboratory</a></p>
                        <p><a href="./pharmacy" class="footer_tag"> Pharmacy</a></p>
                        <p><a href="./bills-payments" class="footer_tag"> Bills & Payments</a></p>
                        <p><a href="./accounts" class="footer_tag"> Accounts</a></p>
                        <p><a href="./reports" class="footer_tag"> Reports</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mt-lg-5">
                    <p class="footer_content_head my-4">For Patients</p>
                    <p><a href="./appointments" class="footer_tag"> Appointments</a></p>
                    <p><a href="./e-prescription" class="footer_tag">e-Prescriptions</a></p>
                    <p><a href="./vaccines" class="footer_tag"> Vaccines</a></p>
                    <p><a href="./medical-records" class="footer_tag"> Medical Records</a></p>
                    <p><a href="./reports" class="footer_tag">Test Reports</a></p>
                </div>
                
                <div class="col-lg-3 col-md-6 mt-lg-5">
                    <p class="footer_content_head my-4">Get In Touch</p>
                    <p>
                        <div class="row mt-3">
                            <div class="col-1 footer_icon">
                                <img fetchpriority="low"  src="assets/images/address_location.svg" alt="location" >  
                            </div>
                            <div class="col-9 footer_tag">
                                319, EVN Road, NGGO Colony, Erode - 638009.
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-1 footer_icon">
                                <img fetchpriority="low"  src="assets/images/phone_icon.svg" alt="location" > 
                            </div>
                            <div class="col-9 footer_tag">
                                +91 99945 02102
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-1 footer_icon">
                                <img fetchpriority="low"  src="assets/images/mail_icon.svg" alt="location" > 
                            </div>
                            <div class="col-9 footer_tag">
                                hello@drcarrot.in
                            </div>
                        </div>
                    </p>
                </div>

                <div class="col-md-12 mt-5">
                    <hr style="background-color: white; opacity: 50%; height: 0.5px; border: 0; ">
                </div>

                <div class="col-md-12 my-2">
                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-6" >
                            <a href="privacy-policy" class="footer_tag"> Privacy policy</a> 
                        </div>

                        <div class="col-6 col-lg-6 col-md-6 copy_right">
                            <p class="footer_tag">&#169; <?php echo date("Y"); ?> Drcarrot.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


<script src="assets/js/wow.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/lightbox/js/lightbox.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/main.nav.js"></script>

<script>

    $(document).ready(function(){
        "use strict";

         new WOW({
             mobile: false, 
         }).init();
        
        document.addEventListener( "touchstart", function (e) {
            console.log("hi");
            // e.preventDefault();
        },
        { passive: true });
    });

    

    $(".benifit_box").click(function(){
        var id = $(this).attr('id');
        $(".benifit_box").removeClass("arrow-bottom");
        $(".benifits__div_text").removeClass("text-white");
        $(".benifit_box").removeClass("message_box_clk");
        $("#"+id).removeClass("message_box");
        $("#"+id).addClass("message_box_clk");
        $("#"+id).addClass("arrow-bottom");
        $("."+id).addClass("text-white");

        $(".benifit_content_box").addClass("hide_benifit_content_box");

        $("#"+id+"_content").removeClass("hide_benifit_content_box");
        $("#"+id+"_contents").removeClass("hide_benifit_content_box");
        $("apponit_bef_box2_content").removeClass("hide_benifit_content_box");
    });

    <?php
    if($curPageName == "index.php")
    {
    ?>
        (function ($) {
            'use strict';
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:true,
                responsiveClass:true,
                autoplay:true,
                autoplayTimeout:5000,
                items : 1, 
                itemsDesktop : false,
                itemsDesktopSmall : false,
                itemsTablet: false,
                itemsMobile : false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    768:{
                        items:2
                    },

                    1000:{
                        items:3
                    }
                }
            })
        })(jQuery); 


        $('.switcher').click(function() {
            if (!$(this).is(':checked')) 
            {
                $(".mobile_screen").addClass('display_none');
                $(".desktop_screen").removeClass('display_none');
            }
            else
            {
                $(".desktop_screen").addClass('display_none');
                $(".mobile_screen").removeClass('display_none');
            }
        });

    <?php
    }
    ?>
</script>

</body>

</html>