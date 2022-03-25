<?php $var = 'current-page-item'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Head Corporate Relations-Rahul Avula | AADYAS ACADEMY - Junior College in Hyderabad</title>
		<meta name="description" content="Mr. Rahul Avula, Head Corporate Relations and Soft Skills Trainer at AADYAS ACADEMY, Hyderabad. He is a versatile, dedicated professional with over 16 plus years of experience.">


		<?php require_once "links.php"; ?>
	    
	       <style>
	       .teacher-profile .teacher-sidebar .img-holder {
                padding: 20px 0;
            }
            .teacher-profile{
                padding: 0 0 50px 0;
            }
            .text-warpper h6{
                font-size: 16px;
                font-weight: 500;
                margin-bottom: 12px;
            }
            .teacher-profile .text-warpper h4 {
                text-transform: uppercase;
                margin: 15px 0 25px 0;
            }
            .teacher-profile p.mmfix {
                margin-bottom: 12px;
            }
            @media (max-width: 991px) {
                .sidebarOne, .teacher-profile .teacher-sidebar .img-holder {
                    margin-top: 10px;
                    margin-bottom: 50px;
                }
            }
            .main-menu-wrapper .nav>li:hover>a:before, .main-menu-wrapper .nav>li.aadyas-pride>a:before {
                width: 100%;
            }

            .video-inner{
                padding:15px;
                box-shadow:0 0 5px #999;
                border-radius:3px;
            }
            .outer{
                padding:0 25px;
            }
            mark{
                background:#f3ef7b;
                line-height:1.9;
            }
            .main-menu-wrapper .nav li.team
            {
                position:relative;
            }
            .main-menu-wrapper .nav li.team::after
            {
                content: '';
                position: absolute;
                bottom: 1px;
                height: 4px;
                background: #2e3192;
                width: 100%;
            }
	       </style>
	    
	</head>

	<body>
		<div class="main-page-wrapper teachers-details">

            <!-- Header _________________________________ -->
			<?php require_once "navbar.php"; ?>

			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>Head Corporate Relations</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Head Corporate Relations</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


	        <!-- Teacher Profile Page  ___________________ -->
	        <div class="teacher-profile">
	        	<div class="container">
	        	    
	        		<div class="row">
	        			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 float-right">
	        				<div class="text-warpper">
	        					<p class="mmfix">Mr. Rahul Avula, Head Corporate Relations and Soft Skills Trainer at AADYAS, 
He is a versatile, dedicated professional with over 16 plus years of experience. 
He has got an International exposure working for various organizations with different capacities in Middle East Countries.</p>
	        					<p class="mmfix">Awarded Certification of Appreciation by United States Army 831st Transportation Battalion (SDDC), United States Coast Guard 595th TRANS BDE and UNITED STATES AIRFORCE 455Th Expeditionary Aerial Port Squadron.</p>
	        					<p class="mmfix">Mr. Rahul Avula is an effective communicator with excellent relationship building and Leadership skills. He has a proven track record of execution and implementation. He is a passionate student & career counselor.</p>
	        					<p class="mmfix">He has been a Career Guidance presenter / Soft Skill Trainer all over Telangana & Andhra Pradesh, Addressing more than 200 + schools and students at various levels in CBSE & ISCE Schools.</p>
	        					<p class="mmfix">Rahul loves to spend precious time with his family, especially with his daughters Harinmani , Shiddhimani and with children at orphanages.</p>
	        					<mark>We are proud to have him on board in our Institution.</mark>
	        				</div> <!-- /.text-wrapper -->
	        			</div>

	        			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 teacher-sidebar float-left wow fadeInUp">
	        				<div class="img-holder theme-bg-color"><img src="images/bod/head-corporate-relations.jpeg" alt="Board of Directors"></div>
	        			</div> <!-- /.teacher-sidebar -->
	        		</div> <!-- /.row -->
	        	    
	        	    <div class="outer">
	        		    <h4 style="padding:30px 0;">Video Testimonials</h4>
	        		    <div class="row">
	        					
	        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
	        			    <div class="video-inner">
	        			        <video width="100%" height="100%" controls>
                                    <source src="videos/video-1.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                                <h4>Pravalika</h4>
                                <p>Dayananda Sagar College of Engineering Bengaluru</p>
	        			    </div>
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
	        			    <div class="video-inner">
	        			        <video width="100%" height="100%" controls>
                                    <source src="videos/video-2.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                                <h4>Harini Yanamandra</h4>
                                <p>Pursuing Business Administration at KL University</p>
	        			    </div>
	        			</div>
	            
	        		   </div> <!-- /.row -->
	        		</div>
	        		
	        	</div> <!-- /.container -->
	        </div> <!-- /.teacher-profile -->
	        


	        <!-- Our Teacher ________________________ -->
            
            <?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>

		</div> <!-- /.main-page-wrapper -->
            
</html>




