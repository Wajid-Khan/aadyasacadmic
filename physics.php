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
            .text-warpper ul{
                list-style:disc;
                margin-left:15px;
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
						<h2>Physics</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Physics</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


	        <!-- Teacher Profile Page  ___________________ -->
	        <div class="teacher-profile">
	        	<div class="container">
	        	    
	        		<div class="row">
	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 float-right">
	        				<div class="text-warpper">
	        					<h4>G. Muralidhara Rao, M.Sc, M.Phil</h4>
	        					<ul>
	        					    <li>Sr. Faculty in Physics.</li>
	        					    <li>35 years of Teaching Experience.</li>
	        					    <li>Worked as the Principal of Gowtham Academy, S.R. Nagar, Hyderabad.</li>
	        					    <li>Worked in all prominent Colleges of Hyderabad including Corporate Colleges as Senior Teaching Faculty.</li>
	        					    <li>Guided many students for IIT-JEE MAINS & ADVANCE and NEET Examinations and produced many seat getting ranks in IIT-JEE, IIIT, BITSAT, SAT etc.,</li>
	        					    <li>Life member of IAPT (Indian Association of Physics Teachers).</li>
	        					</ul>
	        					
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




