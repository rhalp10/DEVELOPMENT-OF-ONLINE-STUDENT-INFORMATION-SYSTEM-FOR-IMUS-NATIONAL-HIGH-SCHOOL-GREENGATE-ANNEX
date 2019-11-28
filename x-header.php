<?php 
require_once("class.user.php");

  
$header = new USER();
?>
<header class=" fixed-top ">
    <!-- style="background-color:#1b621e !important;" -->
    <nav class="navbar navbar-expand-md navbar-light bg-light gradient-green">

        <div class="container">

            <ul class="nav navbar-nav navbar-logo mx-auto">
                <li class="nav-item">
                    <h2 style=" color:white !important; font-size:1.0em;">DEVELOPMENT OF ONLINE STUDENT INFORMATION SYSTEM FOR IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX</h2>
                </li>
            </ul>

        </div>

    </nav>
    <nav class="navbar navbar-expand-md navbar-light bg-light " style="background-color:#4ea02a !important;color:white !important;">
        <div class="container">
            <ul class="nav navbar-nav pull-sm-left">

                <li class="nav-item" style=" width:55px;">
                    <img src="assets/img/logo/logo.png" class="" width="15%" style=" width:50px;">
                </li>
                <li class="nav-item" style=" width:85px;">
                    <a class="navbar-brand" href="index" style=" color:white !important;">INHS-GA</a>
                </li>
            </ul>
        <!--     <ul class="nav navbar-nav pull-sm-left">
                <li class="nav-item ">
                    <a class="nav-link" href="https://facebook.com" target="_BLANK" class="nh nh-facebook" style=" background: #3B5998 !important;color:white !important;">
                        <i class="icon-facebook "></i> F
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="https://facebook.com" target="_BLANK" class="nh nh-twitter" style=" background: #55ACEE !important;color:white !important;">
                        <i class="icon-twitter "></i> T
                    </a>
                </li>
            </ul> -->
            <ul class="nav navbar-nav navbar-logo mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white !important;">
         ADMISSION
        </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index?page=admission">Enrolment Form</a>
                        <a class="dropdown-item" href="index?page=admission_guidelines">Enrolment Steps & Requirements</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white !important;">
         SUBJECTS
        </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index?page=list_of_subject_by_faculty">Faculty List by Subject</a>
                        <a class="dropdown-item" href="index?page=k-12">K12 Program</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="index?page=news" style="color:white !important;">
         NEWS
        </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index?page=memo" id="navbardrop" data-toggle="dropdown" style="color:white !important;">
         MEMO
        </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="http://www.depedimuscity.com/issuances.php"   target="_BLANK">Division</a>
                        <a class="dropdown-item" href="http://depedcalabarzon.ph/september-2018"   target="_BLANK">Regional</a>
                        <a class="dropdown-item" href="http://www.deped.gov.ph/category/issuances/deped-memoranda"   target="_BLANK">National</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white !important;">
         ABOUT US
        </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index?page=history">History</a>
                        <a class="dropdown-item" href="index?page=mv">Vision - Mission</a>
                        <a class="dropdown-item" href="index?page=organizationchart">Organization Chart</a>
                        <a class="dropdown-item" href="index?page=map">How To Get Here</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-sm-right">
                <li class="nav-item">
                    <a class="btn btn-primary  my-2 my-sm-0 text-white btn-sm" data-toggle="modal" data-target="#login"><i class="fas fa-person"></i> Sign In</a>
                </li>

            </ul>
        </div>

    </nav>
</header>