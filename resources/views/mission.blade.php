<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>โรงเรียนท่าโพธิ์ผักก้ามวิทยา</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/1045450785.jpg">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
     <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

        <!-- Image Logo -->
        <a class="text-light navbar-brand logo-image" href="welcome"><b>โรงเรียนท่าโพธิ์ผักก้ามวิทยา</b></a> 
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="welcome">หน้าเเรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="record">ประวัติโรงเรียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="personnel">ข้อมูลครู บุคลากร</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <div class="dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" 
                    role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">ข้อมลูพื้นฐาน</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item my-2" href="activity">ข่าวประชาสัมพันธ์ กิจกรรม</a>    
                        <a class="dropdown-item my-2" href="mission">พันธกิจ / เป้าประสงค์</a>
                        <a class="dropdown-item my-2" href="board">คณะกรรมการสถานศึกษาขั้นพื้นฐาน</a>
                        <a class="dropdown-item my-2" href="studentboard">คณะกรรมการนักเรียน</a>
                        <a class="dropdown-item my-2" href="studentinformation">ข้อมูลนักเรียน</a>
                        <a class="dropdown-item my-2" href="satisfaction">ข้อมูลสิ่งก่อสร้าง</a>
                        <a class="dropdown-item my-2" href="https://www.obec.go.th/">สพฐ.</a>
                        <a class="dropdown-item my-2" href="https://www.ksp.or.th/ksp2018/">คุรุสภา</a>
                        <a class="dropdown-item my-2" href="https://www.moe.go.th/">กระทรวงศึกษาธิการ</a>                              
                      </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#" id="detail_default" 
                        role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">เว็บไซต์สำคัญ</a>
                            <div class="dropdown-menu" aria-labelledby="detail_default">
                              <a class="dropdown-item my-2" href="http://www.pracharathschool.go.th/">โรงเรียนประชารัฐ</a>    
                              <a class="dropdown-item my-2" href="http://www.rspg.or.th/">อนุรักษ์พันธุกรรมพีชๆ </a>
                              <a class="dropdown-item my-2" href="https://www.uprightschool.net/">โรงเรียนสุจริต</a>
                              <a class="dropdown-item my-2" href="http://deetambon.esdc.go.th/dawnhold">โรงเรียนดีประจำตำบล</a>
                              <a class="dropdown-item my-2" href="https://www.vitheebuddha.com/">โรงเรียนวิถีพุทธ</a>
                            </div>
                        </div>
                </li>
                <!-- end of dropdown menu -->
            
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="communicate">ติดต่อสอบถาม</a>
                </li>
            </ul>
            <span class="nav-item">
                @if(Auth::check())
                <div class="dropdown">
                    <button class="btn-outline-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->username}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="{{route('logout')}}">ออกจากระบบ</a>
                    </div>
                </div>
                {{-- <button class="btn-outline-sm">{{Auth::user()->username}}</button> --}}
                @else
                <button class="btn-outline-sm" onclick="modal_login()">ลงชื่อเข้าใช้</button>
                @endif
               
            </span>
        </div>
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>พันธกิจ / เป้าประสงค์</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h3>พันธกิจ/เป้าประสงค์</h3>
                        <p> 
                            </p>
                        <p><a class="blue" href="#your-link"></a> </p>
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container-->
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    
 
    
    	
    <!-- Scripts -->
    <script src="js/jquery-3.6.0.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>