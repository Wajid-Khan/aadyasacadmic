<?php $var = 'current-page-item'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Aadyas Academy | Website Launch</title>

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

            .main-menu-wrapper .nav>li:hover>a:before, .main-menu-wrapper .nav>li.aadyas-pride>a:before {
                width: 100%;
            }

            .single-box{
                padding: 25px;
                margin: 0 0 20px 0;
            }
            .single-box h6 {
                font-weight: 600;
                font-size: 15px;
                text-transform: uppercase;
                color: #333333;
                margin-bottom: 20px;
            }
            .single-box h6 span {
                font-weight: normal;
                font-size: 13px;
                color: #6f6f6f;
                text-transform: none;
                margin-left: 13px;
                vertical-align: top;
            }
            .img-box img{
                border-radius: 5px;
                box-shadow:0 0 10px #999;
            }
            .img-box{
                margin:20px 0;
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
						<h2>Website Launch</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Website Launch</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


	        <!-- Teacher Profile Page  ___________________ -->
	        <div class="teacher-profile">
	        	<div class="container">
	        	    
	        		<div class="row">
	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 float-right">
	        					<div class="wrapper">
    	        					<h3>Website Launch</h3>
    	        					<br>
	        					    <p><b>AADYAS ACADEMY</b> Official website www.aadyasacademy.com was launched from the hands of the legendary <b>Shri.Chukka Ramaiah Garu</b> on 27th January, 2022. Also present for the occasion was the Principal Smt. Deepa Suresh and Head Corporate Relations Mr. Rahul Avula</p>
        	        		        <p>&nbsp;</p>
        	        		        <p>Chukka Ramaiah Garu, The Man Who Made IIT Exam Accessible to Hundreds of Students, a 91-year-old freedom fighter, mathematician and erudite educationist.</p>
        	        		        <p>&nbsp;</p>
        	        		        <p>Ramaiah spent time reading books like ‘Letters from a Father to her Daughter‘ and ‘Discovery of India‘. This was when he truly realised the value of education in opening minds and bringing about change. Deciding that there could be no noble profession than becoming a teacher, he decided to become one himself. With this in his mind, Ramaiah began teaching mathematics at schools. After a long and satisfying career, he retired from the Andhra Pradesh Residential School in Nagarjuna Sagar and settled in Hyderabad. Setting up the coaching institute happened by chance. A few students came up to the retired teacher and asked him to train them for the fiercely competitive IIT-JEE.</p>
        	        		        <p>&nbsp;</p>
        	        		        <p>He had always believed that concept-based training was more important than learning formulae by heart and this was the principle that underlined his teaching. Soon enough, the positive results of his approach had become evident, and the number of students began to grow, purely by word of mouth.</p>

	        				    </div> <!-- /.wrapper -->
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="img-box">
                                <img src="images/image1.jpeg" alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="img-box">
                                <img src="images/image2.jpeg" alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="img-box">
                                <img src="images/image3.jpeg" alt="" width="100%">
                            </div>
                        </div>
	        		</div> <!-- /.row -->
	        	    
	        		
	        	</div> <!-- /.container -->
	        </div> <!-- /.teacher-profile -->
	        


	        <!-- Our Teacher ________________________ -->
            
            <?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>

		</div> <!-- /.main-page-wrapper -->
            
</html>




