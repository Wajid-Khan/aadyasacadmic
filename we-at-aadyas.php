<?php $var = 'current-page-item'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>We at AADYAS ACADEMY | Best Intermediate & Junior College in Hyderabad</title>
		<meta name="description" content="AADYAS ACADEMY offers Online & Offline Intermediate Courses in Hyderabadwith special scholarships for Children of Defense / Police / Central Government Employees.">

		<?php require_once "links.php"; ?>
		<style>
		    .mb-5{
		        margin-bottom:60px;
		    }
		    .page-breadcrum ul {
                margin-bottom: 20px;
            }
            .main-menu-wrapper .nav li.why
            {
                position:relative;
            }
            .main-menu-wrapper .nav li.why::after
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
						<h2>We at Aadyas</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>We at Aadyas</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


	        <!-- Teacher Profile Page  ___________________ -->
	        <div class="teacher-profile mb-5">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 float-right">
	        				<div class="text-warpper">
	        					<div class="row">
	        						<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
            							<ul>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Fully Vaccinated team.</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Hybrid facility for offline and online classes</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Frequently Sanitized class rooms</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Hygiene Campus</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Centrally located 23000 sft Fully Air-conditioned Campus</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>State of the Art Physics and Chemisty Laboratories.</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Regular seminars by prominent speakers from national and international universities and industries.</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Psychologist on Board.</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Monthly Parent teacher Interaction.</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Career fair by National and International Universities </li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>Special scholarships for Children of Defense / Police / Central Government Employees.</li>
            								<li><i class="fa fa-pencil" aria-hidden="true"></i>24/7 Security surveillance</li>
            							</ul>
	        						</div> <!-- /.col- -->

	        				
	        					</div>
	        				</div> <!-- /.text-wrapper -->
	        			</div>

	        		</div> <!-- /.row -->
	        	</div> <!-- /.container -->
	        </div> <!-- /.teacher-profile -->
	        
            
            <?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>

		</div> <!-- /.main-page-wrapper -->
            
</html>




