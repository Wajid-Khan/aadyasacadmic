<?php $var = 'current-page-item'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Best Intermediate College in Hyderabad | AADYAS ACADEMY – Junior College Hyderabad</title>
		<meta name="description" content="AADYAS ACADEMY is the best Intermediate& Junior College in Hyderabad, offering Intermediate Courses like MEC, CEC, MPC and HEC with Entrance Exams Preparation for Management, Hotel Management, CA foundation & Law.">
	
		<?php require_once "links.php"; ?>
		<style>
		    .mt-75{
		        margin-top:75px;
		    }
		    .section-title{
		        text-align:left;
		    }
		    .welcome-section .row p {
                padding: 0 0 0 0px;
                width:100%;
            }
            .section-title h2, .section-title h5 {
                text-transform: normal;
                margin-bottom: 20px;
                font-size: 35px;
            }
            .img-box img{
                border-radius:5px;
            }
            .inner-box{
                padding:25px;
                margin-top:15px;
                background:#f5f5f5;
                color:#000;
                border-radius:5px;
            }
            .welcome-section .row {
                margin-top: 0;
            }
            #myCarousel .carousel-inner h3{
                padding-left: 0 !important;
                color:#fff;
                margin-top: 5px !important;
            }
            #myCarousel .carousel-inner p{
                color:rgb(255 255 255 / 100%);
                background:rgb(0 0 0 / 60%);
                position:absolute;
                top:75%;
                left:50%;
                transform:translate(-50%, -50%);
                width:90%;
                line-height:40px;
                text-shadow: 0 0 15px #fff;
                font-weight: 900;
                z-index:999999 !important;
                padding:5px;
            }
            #myCarousel{
                position:relative;
            }

            #myCarousel .carousel-inner .carousel-caption{
                background:rgb(0 0 0 / 5%);
                padding:10px;
                color:#fff;
                right:0;
                bottom:0;
                top: 0;
                left: 0;
                width:100%;
                z-index:999999;
            }
            .welcome-section .carousel-indicators {
                bottom: -2px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-49.5%, -31%);
            }

            @media (max-width:567.98px){
                #myCarousel .carousel-inner .carousel-caption p{
                    line-height:22px !important;
                    font-size:20px;
                }
                #myCarousel{
                    margin-top:0px;
                }
                .carousel-inner .carousel-caption p{
                    font-size:10px;
                }
                .carousel-indicators{
                    display:none;   
                }
                .popular-course h2{
                    font-size:22px;
                }
                .carousel-inner > .item > img,
                .carousel-inner > .item > a > img {
                    /*min-height: 320px;*/
                    /*padding-top: 80px;*/
                    /*transform: scale(2);*/
                }
                .carousel-inner > .item > img.img2,
                .carousel-inner > .item > a > img.img2 {
                    padding-top: 0px;
                }
                #myCarousel .mobile_slide{
                    display:block;
                }
                #myCarousel .desktop_slide{
                    display:none;
                }
                
            }
            @media (min-width:568px) and (max-width:767.98px){
                #myCarousel .carousel-inner .carousel-caption p{
                    line-height:20px !important;
                }
                #myCarousel{
                    margin-top:0px;
                }
                #myCarousel .carousel-inner .carousel-caption p{
                    line-height:25px !important;
                    font-size:28px;
                }
                .carousel-indicators{
                    display:none;   
                }
                .carousel-inner > .item > img,
                .carousel-inner > .item > a > img {
                    /*min-height: 320px;*/
                    /*transform: scale(2);*/
                }
                #myCarousel .mobile_slide{
                    display:none;
                }
                #myCarousel .desktop_slide{
                    display:block;
                }
                
            }
            @media (min-width:768px) and (max-width:991.98px){
                #myCarousel .carousel-inner .carousel-caption p{
                    line-height:25px !important;
                }
                #myCarousel{
                    margin-top:145px;
                }
                #myCarousel .carousel-inner .carousel-caption p{
                    line-height:30px !important;
                    font-size:30px;
                }
                .carousel-indicators{
                    display:none;   
                }
                #myCarousel .mobile_slide{
                    display:none;
                }
                #myCarousel .desktop_slide{
                    display:block;
                }
            }
            @media (min-width:992px) and (max-width:1199.98px){
                #myCarousel .carousel-inner .carousel-caption p{
                    line-height:30px !important;
                    font-size:32px;
                }
                #myCarousel{
                    margin-top:145px;
                }
                #myCarousel .mobile_slide{
                    display:none;
                }
                #myCarousel .desktop_slide{
                    display:block;
                }
            }
            @media (min-width:1200px){
                #myCarousel .carousel-inner .carousel-caption p{
                    line-height:50px !important;
                    font-size:35px;
                }
                #myCarousel{
                    margin-top:145px;
                }
                #myCarousel .mobile_slide{
                    display:none;
                }
                #myCarousel .desktop_slide{
                    display:block;
                }
            }
            .welcome-section .carousel-indicators li{
                margin: 7px 2px;
                display: block;
            }
            .welcome-section .carousel-indicators .active, .welcome-section .carousel-indicators li:hover {
                margin: 7px 2px;
            }
            .faq_panel .panel ul{
                list-style:disc;
                margin-left:30px;
            }
            .single-box {
                padding: 40px 30px 32px 30px !important;
            }
            .faq .wrapper {
                padding-left: 0;
            }
            .video-inner{
                padding:15px;
                box-shadow:0 0 5px #999;
                border-radius:3px;
            }
            .popular-course h3{
                position: relative;
            }
            .popular-course {
                margin: 0px 0 0 0;
                padding:110px 0 50px 0;
                position:relative;
                background:url('images/banners/course-bg.jpg');
                background-size: cover;
                background-position: center center;
            }
            .popular-course::before{
                content:'';
                position:absolute;
                top:0;
                left:0;
                right:0;
                bottom:0;
                width:100%;
                height:100%;
                background:rgb(255 255 255 / 95%);
                
            }
            #myCarousel .carousel-control-prev{
                position: absolute;
                left: 1%;
                top: 45%;
                /*transform: translate(-50%, -50%);*/
                background: rgb(255 255 255 / 40%);
                padding: 10px 14px;
                text-align: center;
                border-radius: 50%;
                color: #000;
                transition:all .6s;
            }
            #myCarousel .carousel-control-prev:hover{
                background:#fff;
            }
            #myCarousel .carousel-control-next{
                position: absolute;
                right: 1%;
                top: 45%;
                /*transform: translate(-50%, -50%);*/
                background: rgb(255 255 255 / 40%);
                padding: 10px 14px;
                text-align: center;
                border-radius: 50%;
                color: #000;
                transition:all .6s;
            }
            #myCarousel .carousel-control-next:hover{
                background:#fff;
            }
            h3{
                text-align:center;
                font-size:28px;
                text-transform:uppercase;
            }

            .main-menu-wrapper .nav li.home
            {
                position:relative;
            }
            .main-menu-wrapper .nav li.home::after
            {
                content: '';
                position: absolute;
                bottom: 1px;
                height: 4px;
                background: #2e3192;
                width: 100%;
            }

            .owl-carousel.owl-loaded {
                padding: 0 0 120px 0;
            }
            .frequently-ask-question{
                background:url('https://eturnity.eu/wp-content/uploads/faq-questions-sur-la-solution-eturnity-ag.jpg');
                background-size:cover;
                background-position:center right;
                position:relative;
            }
            .faq .faq_panel .panel-group .panel-heading a{
                box-shadow: 0 0 10px #000;
            }
            .frequently-ask-question h3{
                position:relative;
                color:#fff;
                padding-bottom:30px;
            }
            
		</style>
	</head>

	<body>
		<div class="main-page-wrapper">

			<?php require_once "navbar.php"; ?>

			<!-- Theme Banner ________________________________ -->
			<div id="banne carousel1" style="display:non;">
			    
			    <!-- Bootstrap Carousal -->
			    
			    <div id="myCarousel" class="carousel slide caption-animate" data-ride="carousel" data-interval="12000">

                   <!--Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="images/sliders/slider_11.jpg" alt="" class="desktop_slide" style="width:100%">
                      <img src="images/sliders/mob_slide1.webp" alt="" class="mobile_slide" style="width:100%">
                    </div>
                
                    <div class="item">
                      <img src="images/sliders/slider_22.jpg" alt="" class="img2 desktop_slide" style="width:100%">
                      <img src="images/sliders/mob_slide2.webp" alt="" class="mobile_slide" style="width:100%">
                    </div>
                
                    <div class="item">
                      <img src="images/sliders/slider_33.jpg" class="img3 desktop_slide" alt="" style="width:100%">
                      <img src="images/sliders/mob_slide3.webp" alt="" class="mobile_slide" style="width:100%">
                    </div>
                    
                    <div class="item">
                      <img src="images/sliders/slider_44.jpg" alt="" class="desktop_slide" style="width:100%">
                      <img src="images/sliders/mob_slide4.webp" alt="" class="mobile_slide" style="width:100%">
                    </div>
                    
                    <div class="item">
                      <img src="images/sliders/slider_55.jpg" alt="" class="desktop_slide" style="width:100%">
                      <img src="images/sliders/mob_slide5.webp" alt="" class="mobile_slide" style="width:100%">
                    </div>
                    
                    <div class="item">
                      <img src="images/sliders/slider_66.jpg" alt="" class="desktop_slide" style="width:100%">
                      <img src="images/sliders/mob_slide6.webp" alt="" class="mobile_slide" style="width:100%">
                    </div>
                    
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="fa fa-arrow-left carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="fa fa-arrow-right carousel-control-next-icon"></span>
                  </a>

                </div>
			    
			    <!-- Bootstrap Carousal -->
			    
	        	
	        </div> <!--  /#banner -->

	        <!-- Popular Course _________________________ -->
	        <div class="popular-course wow fadeInUp theme-bg-color">
	        	<div class="container">
	        		<h3>POPULAR COURSES</h3>

	        		<div class="row">
		        		<div class="theme-slider course-item-wrapper">
		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/mpc-arch-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-mpc-with-architecture-entrance-exam-preparation.php">Intermediate MPC with Architecture Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/mpc-design-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-mpc-with-design-entrance-exam-preparation.php">Intermediate MPC with Design Entrance Exam Preparation </a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/mpc-engg-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-mpc-with-engineering-entrance-exam-preparation.php">Intermediate MPC with Engineering Entrance Exam Preparation.</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/mec-law-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-mec-with-law-entrance-exam-preparation.php">Intermediate MEC with LAW Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/mec-mang-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-mec-with-management-entrance-exam-preparation.php">Intermediate MEC with MANAGEMENT Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/mec-hotel-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-mec-with-hotel-management-entrance-exam-preparation.php">Intermediate MEC with Hotel Management Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/mec-ca-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-mec-with-ca-foundation.php">Intermediate MEC with CA Foundation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/mec-design-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-mec-with-design-entrance-exam-preparation.php">Intermediate MEC with Design Entrance Exam Preparation </a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/cec-law-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-cec-with-law-entrance-exam-preparation.php">Intermediate CEC with LAW Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/cec-mang-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-cec-with-management-entrance-exam-preparation.php">Intermediate CEC with MANAGEMENT Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/cec-hotel-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-cec-with-hotel-management-entrance-exam-preparation.php">Intermediate CEC with Hotel Management Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/cec-ca-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-cec-with-ca-foundation.php">Intermediate CEC with CA Foundation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/hec-design-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-hec-with-design-entrance-exam-preparation.php">Intermediate HEC with Design Entrance Exam Preparation </a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/hec-law-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-hec-with-law-entrance-exam-preparation.php">Intermediate HEC with LAW Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/hec-mang-sm.webp" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-hec-with-management-entrance-exam-preparation.php">Intermediate HEC with MANAGEMENT Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->

		        			<div class="item hvr-float-shadow">
		        				<div class="img-holder"><img src="images/course-images/hec-hotel.png" alt="Image"></div>
		        				<div class="text">
		        					<h4 class="h4-padd-12"><a href="intermediate-hec-with-hotel-management-entrance-exam-preparation.php">Intermediate HEC with Hotel Management Entrance Exam Preparation</a></h4>
		        					<div class="clear-fix">
		        						<ul class="float-left">
		        							<li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
		        							<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
		        							<li><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
		        						</ul>
		        					</div>
		        				</div> <!-- /.text -->
		        			</div> <!-- /.item -->
		        			
		        		</div> <!-- /.course-slider -->
		        	</div>
	        	</div> <!-- /.container -->
	        </div> <!-- /.popular-course -->

	        <!-- Event Section _______________________ -->
	        <div class="event-section wow fadeInUp" style="display:non;margin: 40px 0 90px 0;">
	        	<div class="container">
	        		<div class="theme-title">
	        			<h3>Events</h3>
	        		</div>

	        		<div class="row">
	        			<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 wow fadeInUp hvr-float-shadow">
	        				<div class="single-event theme-bg-color">
	        					<div class="date p-color">27<span>January <br>2022</span></div>
	        					<a href="website-launch.php"><h6>Website Launch</h6></a>
	        					<p><b>AADYAS ACADEMY</b> Official website www.aadyasacademy.com was launched from the hands of the legendary <b>Shri.Chukka Ramaiah Garu</b> on 27th January, 2022. Also present for the occasion was the Principal Smt. Deepa Suresh and Head Corporate Relations Mr. Rahul Avula</p>
	        				</div> <!-- /.single-event -->
	        			</div>
	        			<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 wow fadeInUp hvr-float-shadow">
	        				<div class="single-event theme-bg-color">
	        					<div class="date p-color">21<span>February <br>2022</span></div>
	        					<a href="mrs-shikha-goel.php"><h6>Mrs Shikha Goel  IPS, Addl  DGP & Director ACB</h6></a>
	        					<p>We had the privilege of meeting Mrs Shikha Goel  IPS, Addl  DGP & Director ACB at her office today. We presented her with our Brochure and discussed about the  pedagogy of our college Madam was very happy to find the uniqueness of our curriculum and the different career options available for  a 10th grade student.</p>
	        				</div> <!-- /.single-event -->
	        			</div>
	        		
	        		</div> <!-- /.row -->
	        	</div> <!-- /.container -->
	        </div> <!-- /.event-section -->

	        <!-- Information Banner _______________________ -->
	        <div class="information-banner wow fadeInUp">
	        	<div class="container">
	        		<h3>Information for teachers and students, Event information and education news</h3>
	        		<!--<h6>ONE OF THE MOST COMPLETE Education THEME</h6>--><br>
	        		<a href="contact-us.php" class="p-color-bg tran3s wow fadeInUp">Contact us</a>
	        	</div> <!-- /.container -->
	        </div> <!-- /.information-banner -->

	        <!-- Testimonial And FAQ Section _________________________ -->
	        <div class="test-faq">
	        	<div class="container">
	        		<div class="row">
	        		    
	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 testimonial wow fadeInLeft" style="display:non;">
	        				<div class="wrapper">
	        					<h3>TESTIMONIALS</h3>
	        					<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
								  	  <!-- Indicators -->
									  <ol class="carousel-indicators">
									    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
									    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
									    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
									    <li data-target="#testimonial-carousel" data-slide-to="3"></li>
									    <li data-target="#testimonial-carousel" data-slide-to="4"></li>
									    <li data-target="#testimonial-carousel" data-slide-to="5"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
									    <div class="item active">
									      <div class="single-box theme-bg-color">
									      		<h6>Niraaj <span>(Pursuing B.COM in Avinash)</span></h6>
                                                <p>Murali sir you are definitely a special teacher. You have a way that immediately puts students at ease. You are stern and jovial at the same time. You have a way of simplifying concepts of commerce and make them easier to understand. </p>									      		
                                                <p>You always gave us real-time examples and discussed historical events that related or emulated to the topic we were discussing in the class.</p>									      		
									      </div> <!-- /.single-box -->
									    </div>

									    <div class="item">
									      <div class="single-box theme-bg-color">
									      		<h6>Arjun Reddy Chinepalli  <span>BITS Hyderabad.</span></h6>
									      		<p>I am Arjun Reddy Chinepalli, I have observed right from the first day that he is a great teacher whose explanation is amazing and has fun methods learning. He not only taught us Chemistry but also the aspects of real life.</p>
									      		<p>Surendranath sir was always very peaceful and never failed to explain a doubt. He was always interactive with his students. Conclusively, I can say that he is a great teacher who always motivates students.</p>
									      		<p>Currently, I am a first year undergraduate student in BITS Hyderabad and pursuing MSc mathematics (dual degree).</p>
									      </div> <!-- /.single-box -->
									    </div>

									    <div class="item">
									      <div class="single-box theme-bg-color">
									      		<h6>Padma priya <span>Works for Delliote</span></h6>
									      		<p>Deepa ma’am has provided me a great support throughout my high school. She has a strong sense of responsibility towards her students and deeply cared for their education as well as their well being. She would engage with the students on a day to day basis which made her very approachable.Once again thank you very much madam.</p>
									      </div> <!-- /.single-box -->
									    </div>
									    <div class="item">
									      <div class="single-box theme-bg-color">
									      		<h6>Dr. K. Rama Devi <span>Professor of pathology, Govt Hospital of Wanaparthy</span></h6>
									      		<p>Murali sir is a very good faculty. He taught both my children during their intermediate. His way of teaching is  excellent and very clear to understand for students. He is an humble person who is student friendly as well.</p>
									      </div> <!-- /.single-box -->
									    </div>
									    
									    <div class="item">
									      <div class="single-box theme-bg-color">
									      		<h6>B Sai priyansh <span>Pursuing BBA Degree</span></h6>
									      		<p>I am B Sai priyansh, pursuing pilot training at 2fly in Miami Florida right now I am a certified private pilot and pursuing my BBA degree  along with flying . My journgey in college was wonderful and very helpful . I have gained lot of knowledge and skills which are being very helpful for me in my present life . My journey was accompanied by RAHUL sir , he is very kind , knowledgeable , friendly there are no words to describe his presence in the college . While I was in the college he gave me many opportunities to improve my skills and overcome my fear . He guided me for choosing the right path after the junior college . He has helped me to stay confident in what I choose . He has always been friend more than a teacher with whom I could share my problems . My journey in Junior College felt homely because of Rahul sir . It is always said that with a saint the path of life gets easy , with a tourist guide a vacation becomes easy and with Rahul sir beside the educational life and path becomes easy . I'm very thankful that I was under guidance of Rahul sir .</p>
									      </div> <!-- /.single-box -->
									    </div>
									    
									    <div class="item">
									      <div class="single-box theme-bg-color">
									      		<h6>Mahima Penumathsa <span>BS in Information and Decision Sciences, University Of Illinois at Chicago</span></h6>
									      		<p>College can be stressful and overwhelming because of the uncertainties and the opportunities it comes with, but with mentors like Rahul sir and Deepa Ma’am and their intensive advising support, that journey becomes much easier.</p>
									      </div> <!-- /.single-box -->
									    </div>
									</div>
								</div> <!-- /#testimonial-carousel -->
	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.testimonial -->

	        			</div> <!-- /.faq -->
	        		</div> <!-- /.row -->
	        	</div> <!-- /.container -->
	        </div> <!-- /.test-faq -->


	        <!-- Testimonial And FAQ Section _________________________ -->
	        <div class="test-faq frequently-ask-question" style="margin-bottom:0;padding-bottom:110px;">
	        	<div class="container">
	        		<div class="row">
                        <div class="col-12">
                            <h3>Frequently Asked Questions</h3>
                        </div>
	        			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 faq wow fadeInRight">
	        				<div class="wrapper">
	        					
	        					<!-- ________________ Panel _______________ -->
	        					<div class="faq_panel">
									<div class="panel-group theme-accordion" id="accordion">
									    
									  <div class="panel">
									    <div class="panel-heading active-panel">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									        Why integrated courses along with intermediate.</a>
									      </h6>
									    </div>
									    <div id="collapse1" class="panel-collapse collapse in">
									      <div class="panel-body">
									      	<p>The intermediate program is a crucial phase, as the student has to decide “what next” after 12th class or senior intermediate. Immediately after finishing 12th they have to take admission into their chosen career. They can’t waste one more year for preparing for the undergraduate entrance exam. so integrated programs are made a part of regular curriculam in junior and senior intermediate, and the students take up many mock exams for the entrance exam.</p>
									      </div>
									    </div>
									  </div> <!-- /panel 1 -->
									  
									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									         Do you guarantee admissions into university.</a>
									      </h6>
									    </div>
									    <div id="collapse2" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>We can guide the student to select a course and an university of his/her choice. The application process for the same is handled by us. Mock exams are conducted for the universities they choose.</p>
									      </div>
									    </div>
									  </div> <!-- /panel 2 -->
									  
									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									        What is the difference between Aadyas & other colleges.</a>
									      </h6>
									    </div>
									    <div id="collapse3" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>Here we have integrated programs like EAMCET, JEE MAINS, DEISGN, ARCHITECTURE, CLAT, HOTEL MANAGEMENT along with intermediate Education.</p>
									      	<ul>
									      	    <li>We are centrally located and easily accessible.</li>
									      	    <li>We have transport facility [Third Party].</li>
									      	    <li>24,000 square feet fully air conditioned campus.</li>
									      	    <li>Best start of art physics and chemistry lab.</li>
									      	    <li>Highly experienced faculty</li>
									      	    <li>Counsellor available on campus.</li>
									      	    <li>Hybrid facility available.</li>
									      	</ul>
									      </div>
									    </div>
									  </div> <!-- /panel 3 -->

									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
									        Do you offer long term JEE Main training.</a>
									      </h6>
									    </div>
									    <div id="collapse4" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>Yes we offer long term training on weekends .For more info <a href="https://aadyasacademy.com/" >click here</a></p>
									      </div>
									    </div>
									  </div> <!-- /panel 4 -->

									  


									</div> <!-- end #accordion -->
								</div> <!-- End of .faq_panel -->
	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.faq -->
	        			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 faq wow fadeInRight">
	        				<div class="wrapper">
	        				
	        					<!-- ________________ Panel _______________ -->
	        					<div class="faq_panel">
									<div class="panel-group theme-accordion" id="accordion">
									    
									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
									        What do you cover in civils foundation.</a>
									      </h6>
									    </div>
									    <div id="collapse5" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>We provide the foundation like general knowledge, basics of civil foundation, mock tests for civil foundation and give an inlight about the exams.</p>
									      	<ul>
									      	    <li>Will be taught by highly qualified faculties having vast experience in the domain of civil services examination</li>
									      	    <li>Regular doubt clarifying sessions are planned to improve the weaker areas.</li>
									      	    <li>The class is embedded with current approach including regular newspaper analysis.</li>
									      	    <li>The subject content will be taught from basics in order to improve the foundation of the subjects</li>
									      	    <li>Intensive writing skill sessions will be conducted to develop presentation technique.</li>
									      	    <li>Systematic approach will be followed to cover both international and domestic issues efficiently</li>
									      	    <li>Audio visuals, power point presentation and other interactive modes of learning platforms will be used to make teaching more interesting and for better understanding</li>
									      	</ul>
									      </div>
									    </div>
									  </div> <!-- /panel 5 -->

									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
									        How often are the workshops conducted</a>
									      </h6>
									    </div>
									    <div id="collapse6" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>The workshops are timed once on a fortnight. If basically depends on the class schedule and the topic covered. We would like to use visual aids to showcase the topic after the regular class completed. We have prominent speakers in the field of aerosciences, memory, civil services, Career objectives, Physics, Chemistry, Maths and many more.</p>
									      </div>
									    </div>
									  </div> <!-- /panel 6 -->

									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
									        Do you have live projects</a>
									      </h6>
									    </div>
									    <div id="collapse7" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>Yes we have live design, sculpting, hotel management, architecture and drawing live projects.</p>
									      </div>
									    </div>
									  </div> <!-- /panel 7 -->

									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
									        Can we take hotel management along with CEC & HEC</a>
									      </h6>
									    </div>
									    <div id="collapse8" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>Yes you can take the integrated program of hotel management along with CEC, HEC. There are multiple options which can be added to the CEC & HEC group like BBA entrance, law entrance and also design entrance.</p>
									      </div>
									    </div>
									  </div> <!-- /panel 8 -->

									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
									        What is the syllabus of Design Course</a>
									      </h6>
									    </div>
									    <div id="collapse9" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>This course focuses on enhancing imaginative creativity and technical skills. The delivery method of this course includes seminars, lectures, workshops practical lab work, design student work. <br>We include quantitative aptitude, logical reasoning, general knowledge, perspective drawing, imaginative drawing and lateral drawing followed by an interview and portfolio presentation.</p>
									      </div>
									    </div>
									  </div> <!-- /panel 9 -->

									  <div class="panel">
									    <div class="panel-heading">
									      <h6 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
									        Can MEC students write NATA</a>
									      </h6>
									    </div>
									    <div id="collapse10" class="panel-collapse collapse">
									      <div class="panel-body">
									      	<p>No Maths, physics and Chemistry is compulsory in 11th & 12th to write NATA entrance.</p>
									      </div>
									    </div>
									  </div> <!-- /panel 10 -->

									</div> <!-- end #accordion -->
								</div> <!-- End of .faq_panel -->
	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.faq -->

	        		</div> <!-- /.row -->
	        	</div> <!-- /.container -->
	        </div> <!-- /.test-faq -->

	        <!-- Testimonial And FAQ Section _________________________ -->
	        <div class="test-faq" style="display:none;">
	        	<div class="container">
	        		<div class="row">
	        			
	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 faq wow fadeInRight">
	        				<div class="wrapper">
	        					<h3>Video Testimonials</h3>
	        					<!-- ________________ Panel _______________ -->
	        					<div class="faq_panel">
									<div class="panel-group theme-accordion" id="accordion">
									    
									  <div class="row">
	        
                    	        			
                	            
                	        		   </div> <!-- /.row -->

									</div> <!-- end #accordion -->
								</div> <!-- End of .faq_panel -->
	        				</div> <!-- /.wrapper -->
	        			</div> <!-- /.faq -->
	        		</div> <!-- /.row -->
	        	</div> <!-- /.container -->
	        </div> <!-- /.test-faq -->


			<?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>

		</div> <!-- /.main-page-wrapper -->
	</body>

</html>