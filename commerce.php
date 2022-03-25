<?php $var = 'current-page-item'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Aadyas Academy | Board of Directors</title>

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
                margin: 15px 0 5px 0;
            }
            .teacher-profile .text-warpper h5 {
                margin: 0px 0 25px 0;
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
            .text-warpper blockquote{
                font-size:14px;
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
						<h2>Commerce</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Commerce</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


	        <!-- Teacher Profile Page  ___________________ -->
	        <div class="teacher-profile">
	        	<div class="container">
	        	    
	        		<div class="row">
	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 float-right">
	        				<div class="text-warpper">
	        					<h4>Mr.J.MURALI KRISHNA </h4>
	        					<h5>He holds his Masters in Commerce.</h5>
	        					<ul>
	        					    <li>He has been a Faculty in  Commerce for 14 years.</li>
	        					    <li>He Implemented two way Communication where students were engrossed in learning.</li>
	        					    <li>Conducted an Event “BUSINESS DOYEN“which helped the students learn unique qualities of successful entrepreneurs. </li>
	        					    <li>He is a positive person who has an enthusiastic outlook on life.</li>
	        					    <li>He loves his JOB and get a great sense of Achievement from  seeing his students develop and grow as individuals.</li>
	        					</ul>
	        					<br>
	        					<p class="mmfix">He thinks that...</p>
	        					<blockquote>IF I CAN HAVE A POSITIVE IMPACT ON THEIR FUTURE, I FEEL I AM DOING MY JOB WELL</blockquote>
	        					
	        				</div> <!-- /.text-wrapper -->
	        			</div>

	        
	        		</div> <!-- /.row -->
	        		<br>

	        		
	        	</div> <!-- /.container -->
	        </div> <!-- /.teacher-profile -->
	        


	        <!-- Our Teacher ________________________ -->
            
            <?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>

		</div> <!-- /.main-page-wrapper -->
            
</html>




