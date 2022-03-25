<?php 

if(isset($_GET['position']))
{
	$position = $_GET['position'];
	if($position == 'business_development_executives')
	{
		$position = str_replace('business_development_executives', 'Business Development Executives', $position);
	}
	if($position == 'education_counsellors')
	{
		$position = str_replace('education_counsellors', 'Education Counsellors', $position);
	}
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Aadyas Academy</title>

		<?php require_once "links.php"; ?>
		<style>
			tbody tr{
				text-align: left;
			}
			label{
				display: none;
				text-align: left;

			}
			.form-control{
				height: auto;
    			padding: 15px 20px;
    			border: 1px solid #ede7e7;
    			border-radius: 0;
			}
			.careers-form button {
			    width: 170px;
			    line-height: 43px;
			    border: 1px solid #fff;
			    text-transform: uppercase;
			    font-weight: 600;
			    text-align: center;
			    background: transparent;
			    background: #2e3192;
    			color: #fff;
    			transition: all .4s;
			}
			.careers-form button:hover {
				background: transparent;
				border: 1px solid #2e3192;
				color: #2e3192;
			}
		</style>
	</head>

	<body>
		<div class="main-page-wrapper about-us-v1-page">


			<?php require_once "navbar.php"; ?>


			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>Apply for <?php if(isset($position)): echo $position; endif; ?> faculty position</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container" style="position: relative;">
					<ul >
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Apply for Job </li>
						<a href="careers.php" style="text-decoration: underline;position: absolute;top: 20px;right: 15px;">Go Back</a>
					</ul>

				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->



			<!-- Welcome Section ___________________________ -->
	        <div class="welcome-section-two mb-5" style="margin-bottom: 30px;">
	        	<div class="container">
	        		<div class="section-title wow fadeInUp">
	        			
	        			<div class="row">
	        				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
	        					<form method="post" action="" class="careers-form">
	        						<div class="form-group">
	        							<label>Name</label>
	        							<input type="text" name="" placeholder="Enter Your Name" class="form-control">
	        						</div>
	        						<div class="form-group">
	        							<label>Email</label>
	        							<input type="email" name="" placeholder="Enter Your Email" class="form-control">
	        						</div>
	        						<div class="form-group">
	        							<label>Mobile</label>
	        							<input type="text" name="" placeholder="Enter Your Mobile" class="form-control">
	        						</div>
	        						<div class="form-group">
	        							<label>Position</label>
	        							<input type="text" name="" id="position" readonly placeholder="Enter " value="Position: <?php if(isset($position)): echo $position; endif; ?>" class="form-control">
	        						</div>
	        						<div class="form-group">
	        							<label>Experience</label>
	        							<select class="form-control" id="" name="" required>
	        								<option value="">Select Experience</option>
	        								<option value="1">1 year</option>
	        								<option value="2">2 years</option>
	        								<option value="3">3 years</option>
	        								<option value="4">4 years</option>
	        								<option value="5+">5 years or more</option>
	        							</select>
	        						</div>
	        						<div class="form-group">
	        							<label>Resume</label>
	        							<input type="file" name="" id="position" placeholder="Enter " value="" class="form-control">
	        						</div>
	        						<input type="hidden" name="position" value="<?php if(isset($position)): echo $position; endif; ?>">
	        						<button class="" type="button">Submit</button>
	        					</form>
	        				</div>
	        				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
	        					<div class="img-outer">
	        						<img src="images/vacancy.png" style="display: block;margin: auto;">
	        					</div>
	        				</div>
	        			</div>
	        		</div> <!-- /.section-title -->

	        		
	        	</div> <!-- /.container -->
	        </div> <!-- /.welcome-section-two -->


	    	<?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>


		</div> <!-- /.main-page-wrapper -->
	</body>
<script>
$(document).ready(function(){

});
</script>
</html>




