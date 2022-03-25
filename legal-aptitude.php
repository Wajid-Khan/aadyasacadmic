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
						<h2>Legal Aptitude</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Legal Aptitude</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


	        <!-- Teacher Profile Page  ___________________ -->
	        <div class="teacher-profile">
	        	<div class="container">
	        	    
	        		<div class="row">
	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 float-right">
	        				<div class="text-warpper">
	        					<!--<h4></h4>-->
	        					<!--<h6><i>Content will be updated...</i></h6>-->
	        					<p class="mmfix">Mr. Ramprasad has completed an MA in Economics, an MBA, an LLB followed by an LLM and finally an MBL which is Master’s in Business Law from various Universities such as Bangalore University, Madras University and finally, National Law school of India University, Bangalore which is the best Law school in the country</p>
	        					<p class="mmfix">Ramprasad’s knowledge of the law is vast. He has developed the knack of being able to communicate with students of all levels very effectively. To paraphrase Lord Acton’s famous words he says, “Knowledge is power and Knowledge of Law is Absolute Power !”</p>
	        					<p class="mmfix">He started out his career as a Law Officer in Bank of Maharashtra in 1978 and then proceeded into a teaching career first in Loyola Academy PG College and then in Career Launcher where he trained students for competitive exams like CLAT exam.</p>
	        					<p class="mmfix">We are privileged to have MR. Ramprasad on board to mentor out students. He is the great grandson of Late. Sri C. Rajagopalachari (Rajaji) the first and last Indian Governor-General of India and an eminent lawyer and author of his times !</p>
	        					
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




