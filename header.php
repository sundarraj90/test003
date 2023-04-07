<?php  
    header("Cache-Control: max-age=2592000");
    
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<meta content="" name="description">
  	<meta content="" name="keywords">
    <meta http-equiv="Cache-control" content="public">

  	<!-- Favicons -->
  	<link href="assets/images/favicon.png" rel="icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <?php
        if($curPageName == 'index.php')
        {
    ?>
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
            <link href="assets/css/home.css" rel="stylesheet">
    <?php
        }
    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
  	<link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
    <header id="header" class="header">
        <div class="container-fluid  d-flex align-items-center justify-content-between container-fluid-nav nav_padding">
            <a href="./index" class="logo d-flex align-items-center">
                <img fetchpriority="low" src="assets/images/drcarrot_logo.svg" class="w-100"  alt="">
            </a>
            <nav id="navbar" class="navbar justify-content-center">
                <ul>
                    <li class="dropdown"><a href="javascript:void(0);"><span>Features</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="./appointments"><img fetchpriority="low" src="assets/images/nav_bar/nav_appoint.svg"  alt=""><span class="nav_span">Appoinments</span></a></li>
                            <li><a href="./e-prescription"><img fetchpriority="low" src="assets/images/nav_bar/nav_epres.svg"  alt=""><span class="nav_span">E-Prescription</span> </a></li>
                            <!-- <li class="dropdown">
                                <a href="./e-prescription"><img fetchpriority="low" src="assets/images/nav_bar/nav_epres.svg"  alt=""><span class="nav_span">E-Prescription</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="./e-prescription"><img fetchpriority="low" src="assets/images/nav_bar/nav_appoint.svg"  alt=""><span class="nav_span">Deep Drop Down 1</span></a></li>
                                    <li><a href="#"><img fetchpriority="low" src="assets/images/nav_bar/nav_appoint.svg"  alt=""><span class="nav_span">Deep Drop Down 2</span></a></li>
                                    <li><a href="#"><img fetchpriority="low" src="assets/images/nav_bar/nav_appoint.svg"  alt=""><span class="nav_span">Deep Drop Down 3</span></a></li>
                                    <li><a href="#"><img fetchpriority="low" src="assets/images/nav_bar/nav_appoint.svg"  alt=""><span class="nav_span">Deep Drop Down 4</span></a></li>
                                    <li><a href="#"><img fetchpriority="low" src="assets/images/nav_bar/nav_appoint.svg"  alt=""><span class="nav_span">Deep Drop Down 5</span></a></li>
                                </ul>
                            </li> -->
                            <li><a href="./medical-records"><img fetchpriority="low" src="assets/images/nav_bar/nav_medical_rec.svg"  alt=""><span class="nav_span">Medical Records</span></a></li>
                            <li><a href="./reminders"><img fetchpriority="low" src="assets/images/nav_bar/nav_reminder.svg"  alt=""><span class="nav_span">Reminders</span></a></li>
                            <li><a href="./vaccines"><img fetchpriority="low" src="assets/images/nav_bar/nav_vaccines.svg"  alt=""><span class="nav_span">Vaccines</span></a></li>
                            <li><a href="./laboratory"><img fetchpriority="low" src="assets/images/nav_bar/nav_lab.svg"  alt=""><span class="nav_span">Laboratory</span></a></li>
                            <li><a href="./bills-payments"><img fetchpriority="low" src="assets/images/nav_bar/nav_billing.svg"  alt=""><span class="nav_span">Bills & Payments</span></a></li>
                            <li><a href="./pharmacy"><img fetchpriority="low" src="assets/images/nav_bar/nav_pharmacy.svg"  alt=""><span class="nav_span">Pharmacy</span></a></li>
                            <li><a href="./reports"><img fetchpriority="low" src="assets/images/nav_bar/nav_reports.svg"  alt=""><span class="nav_span">Reports</span></a></li>
                            <li><a href="./accounts"><img fetchpriority="low" src="assets/images/nav_bar/nav_accounts.svg"  alt=""><span class="nav_span">Accounts</span></a></li>
                            <li><a href="./admissions"><img fetchpriority="low" src="assets/images/nav_bar/nav_admission.svg"  alt=""><span class="nav_span">Admissions</span></a></li>
                            <li><a href="./stents-register"><img fetchpriority="low" src="assets/images/nav_bar/nav_stents.svg"  alt=""><span class="nav_span">Stents Register</span></a></li>
                            <li><a href="./implant-stents"><img fetchpriority="low" src="assets/images/nav_bar/nav_stents.svg"  alt=""><span class="nav_span">Implant Stents</span></a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="./index#why_drcarrot">Why Dr.carrot</a></li>
                    <li><a class="nav-link scrollto" href="./about">About</a></li>
                    <li><a class="nav-link scrollto" href="./contact-us">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>