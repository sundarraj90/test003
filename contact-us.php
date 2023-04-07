<?php
include_once 'submit.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="techb">
    <meta name="author" content="Enterprise Development">
    <link href="assets/images/favicon.png" rel="icon">

    <title>Contact Us </title>
      
    <link href="assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        input {
            outline: 0;
            border-width: 0 0 1px;
            border-color: rgb(0, 0, 0);
            width:90%;
        }

        .green_check{
            width: auto;
            margin-top: 8px !important;
            accent-color: rgb(35, 170, 42);
        }

        .contact_scroll {
            -ms-overflow-style: none; 
            scrollbar-width: none;
        }

        .contact_scroll::-webkit-scrollbar { 
            display: none;
        }

        .red_color, .status-msg{
            color:red;
        }

        .contact_head{
            font-family: AvertaStd-Bold;
            font-size: 30px;
            line-height: 45px;
            letter-spacing: 0em;
            margin-top: 5%;
        }

        .contact_detail{
            font-family: AvertaStd-Regular;
            font-size: 16px;
            line-height: 32px;
            letter-spacing: 0em;
            text-align: left;

        }

        .back_div {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: transparent;
            padding: 50px;
            font-size: 20px;
        }

        .check_box{
            font-family: AvertaStd-Regular;
            font-size: 14px !important;
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 0em;
            text-align: left;
        }

        .contactus-query-form-div {
            -ms-flex-item-align: top;
            align-self: top;
            height: 6rem;
        }

        .z-index-1 {
            z-index: 1;
        }

        .position-absolute {
            position: absolute!important;
        }

        .back_herf {
            color: #fff !important;
            text-decoration: none;
            background-color: transparent;
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: 0em;
            text-align: left;
            padding-left: 2%;

        }
        .contact_scroll{
            height:100vh;
            overflow: scroll;
        }


        @media only screen and (max-width: 576px) {
            .contact_scroll{
                height:100%;
                overflow: scroll;
            }

            .field_head{
                padding-top: 7%;
            }
            .check_box{
                font-family: AvertaStd-Regular;
                font-size: 12px !important;
                font-weight: 400;
                line-height: 22px;
                letter-spacing: 0em;
                text-align: left;
                padding-top: 3%;
            }

            .contact_head{
                font-size: 35px !important;
                font-weight: 600 !important;
                line-height: 45px !important;
                text-align: left !important;
                margin-top: 21%!important;
            }

            .send_button{
                text-align: center;
                margin-bottom: 10% !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .contact_head{
                font-size: 45px;
                font-weight: 600;
                line-height: 45px;
                text-align: left;
                margin-top: 8%;
            }

            .contactus-query-form-div {
                -ms-flex-item-align: top;
                align-self: top;
                height: 4rem;
            }
            
            .hide_contact_img{
                display:none;
            } 
            .contact_scroll{
                height:100%;
                overflow: scroll;
            }

            .check_box{
                font-family: AvertaStd-Regular;
                font-size: 12px !important;
                font-weight: 400;
                line-height: 22px;
                letter-spacing: 0em;
                text-align: left;

            }

            .back_herf {
                color: #030303 !important;
                text-decoration: none;
                background-color: transparent;
                font-size: 16px;
                font-weight: 400;
                line-height: 20px;
                letter-spacing: 0em;
                text-align: left;
                padding-left: 2%;
            }
            .send_button{
                text-align: center;
                margin-bottom: 5%;
            }
        }

        .padding_margin{
            padding:0;
            margin:0;
        }
    </style>
</head>

<body>
    <div class="contactus-query-form-div z-index-1 d-flex flex-row justify-content-start align-items-center my-0 px-3 w-100 position-absolute">
        <a class="back_herf" href="javascript:history.back()" title="Back"><img fetchpriority="low" class="bookmark_svg" src="assets/images/back_icon.svg" alt="" > Back </a>
    </div>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-5 col-xl-5 padding_margin hide_contact_img" >
                <img src="assets/images/contact.svg" alt="" class="w-100">
            </div>
            <div class="col-12 col-lg-7 col-md-12  contact_scroll" >
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12" >
                            <div class="float-right w-75" >
                                <?php if(!empty($successMsg)){ ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $successMsg; ?>
                                    </div>
                                <?php } ?>

                                <?php if(!empty($statusMsg)){ ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $statusMsg; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12" >
                            <p class="contact_head">Talk to an expert<span id="contact_page_title"></span></p>
                            <p class="contact_detail mt-2">
                                We’d like to learn more about you and how we can work together. Can you tell us a bit more about yourself?
                            </p>
                        </div>
                        <form id="contactForm" action="" method="post">
                            <input type="hidden" name="submit_frm" value="1">
                            <div class="col-12 col-lg-12 mt-lg-4 row padding_margin" >
                                <div class="col-12 col-lg-6 col-md-6 mt-2">
                                    <div class="field_head">
                                        <lable id="first_name_lable">First Name*</lable>
                                    </div>
                                    <input placeholder="First name" name="first_name" type="text" required/>
                                    <?php if(!empty($firstnameErr)){ ?>
                                        <p class="status-msg"><?php echo $firstnameErr; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 mt-2">
                                    <div class="field_head">
                                        <lable id="last_name_lable">Last Name*</lable>
                                    </div>
                                    <input placeholder="Last name" type="text" name="last_name" required/>
                                    <?php if(!empty($lastnameErr)){ ?>
                                        <p class="status-msg"><?php echo $lastnameErr; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 mt-lg-5 row padding_margin" >
                                <div class="col-12 col-lg-6 col-md-6 mt-2">
                                    <div class="field_head">
                                        <lable id="email_lable">Email*</lable>
                                    </div>
                                    <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                                    <?php if(!empty($emailErr)){ ?>
                                        <p class="status-msg"><?php echo $emailErr; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 mt-2">
                                    <div class="field_head">
                                        <lable id="hospital_lable">Hospital Name*</lable>
                                    </div>
                                    <input type="text" placeholder="Hospital Name" name="hospital_name" required/>
                                    <?php if(!empty($hospitalErr)){ ?>
                                        <p class="status-msg"><?php echo $hospitalErr; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="col-12 col-lg-12 mt-5">
                                    <input type="text" placeholder="How Can We Help You*" name="message" required/>
                                </div>

                                <div class="col-12 col-lg-12 mt-3 ">
                                    <div class="check_box ">
                                        <input type="hidden" id="contact_me" name="contact_me" value="0">
                                        <input class="green_check" id="contact_me_chk" type="checkbox" required> 
                                        I consent to Dr.Carrot processing my personal data entered above so the company can contact me.*
                                    </div>
                                    <?php if(!empty($contactmeErr)){ ?>
                                        <p class="status-msg"><?php echo $contactmeErr; ?></p>
                                    <?php } ?>
                                    <div class="check_box mt-sm-2">
                                        <input type="hidden" id="notification" name="notification" value="0">
                                        <input class="green_check" id="notification_chk" type="checkbox"> 
                                        I would like to receive details about products, services and events from Dr.Carrot.
                                    </div>
                                    <div class="mt-lg-4 mt-md-2 mr-lg-5 check_box">
                                        For more information on how your personal data will be processed and what choices you have, please refer to the  <a href="./privacy-policy" style="color: rgba(255, 86, 48, 1);text-decoration:underline 0.5px;">Dr.Carrot Privacy Notice</a>.
                                    </div>

                                    <div class="check_box  mt-md-2 mt-lg-3">
                                        *Mandatory fields
                                    </div>

                                    <div class="send_button mb-lg-5">
                                        <button class="g-recaptcha btn btn-primary btn-lg px-5 mt-4" 
                                            type="submit"
                                            data-sitekey="6Le-VAclAAAAAI3b0Xl-55h59sDORZAWDe2geBKA" 
                                            data-callback='onSubmit' 
                                            data-action='submit' >Send
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }

        function onSubmit(token) {

            // if ($("#contact_me_chk").is(':checked')) {
                document.getElementById("contactForm").submit();
            // }
            // else{
            //     $("#contact_me_chk").focus();
            // }

            
        }

        $('#contact_me_chk').click(function() {
            if ($(this).is(':checked')) {
                $("#contact_me").val('1');
            }
            else{
                $("#contact_me").val('0'); 
            }
        });

        $('#notification_chk').click(function() {
            if ($(this).is(':checked')) {
                $("#notification").val('1');
            }
            else{
                $("#notification").val('0'); 
            }
        });
        
        

        var firstname = '<?php echo !empty($firstnameErr)?$firstnameErr:'' ?>';
        var lastname = '<?php echo !empty($lastnameErr)?$lastnameErr:'' ?>';
        var email = '<?php echo !empty($emailErr)?$emailErr:'' ?>';
        var hospital = '<?php echo !empty($hospitalErr)?$hospitalErr:'' ?>';
        var message = '<?php echo !empty($messageErr)?$messageErr:'' ?>';

        $(document).ready(function() {
            if(firstname)
            {
                $("#first_name_lable").addClass('red_color');
            }
            else
            {
                $("#first_name_lable").removeClass('red_color');
            }

            if(lastname)
            {
                $("#last_name_lable").addClass('red_color');
            }
            else
            {
                $("#last_name_lable").removeClass('red_color');
            }

            if(email)
            {
                $("#email_lable").addClass('red_color');
            }
            else
            {
                $("#email_lable").removeClass('red_color');
            }

            if(hospital)
            {
                $("#hospital_lable").addClass('red_color');
            }
            else
            {
                $("#hospital_lable").removeClass('red_color');
            }

        });
    </script>
</body>
</html>