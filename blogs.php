<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Blogs | AADYAS ACADEMY</title>
	<meta name="description" content="AADYAS ACADEMY, Intermediate College in Hyderabadhaving an eminent Board of Governors who had pursued their education from top ranking universities in India, the United Kingdom and the United States.">


	<?php require_once "links.php"; ?>
	<style>
        .main-menu-wrapper .nav li.blogs
        {
            position:relative;
        }
        .main-menu-wrapper .nav li.blogs::after
        {
            content: '';
            position: absolute;
            bottom: 1px;
            height: 4px;
            background: #2e3192;
            width: 100%;
        }
        .latest-news .single-post .text-wrapper .text a.title{
            height: 85px;
        }
        /* CSS */
        .button-29 {
          align-items: center;
          appearance: none;
          background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
          border: 0;
          border-radius: 6px;
          box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
          box-sizing: border-box;
          color: #fff;
          cursor: pointer;
          display: inline-block !important;
          font-family: "JetBrains Mono",monospace;
          height: 35px;
          justify-content: center;
          /*line-height: 1;*/
          line-height: 35px;
          margin-top: 10px;
          list-style: none;
          overflow: hidden;
          padding-left: 16px;
          padding-right: 16px;
          position: relative;
          text-align: left;
          text-decoration: none;
          transition: box-shadow .15s,transform .15s;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;
          white-space: nowrap;
          will-change: box-shadow,transform;
          font-size: 18px;
        }
        
        .button-29:focus {
          box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
        }
        
        .button-29:hover {
          box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
          transform: translateY(-2px);
        }
        
        .button-29:active {
          box-shadow: #3c4fe0 0 3px 7px inset;
          transform: translateY(2px);
        }
    </style>
    </head>

	<body>
		<div class="main-page-wrapper">


			<!-- Header _________________________________ -->
			<?php require_once "navbar.php"; ?>


			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>Blogs</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Blogs</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


	        <!-- Latest News ___________________________ -->
	        <div class="latest-news wow fadeInUp theme-bg-color blog-v1">
	        	<div class="container">
	        		<div class="post-wrapper row">
	        			<div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
	        					<div class="img-holder">
	        						<!--<div class="date wow fadeInUp p-color-bg"></div>-->
	        						<img src="images/blog/blog-img1.jpeg" alt="Image">
	        						<a href="boost-your-preparation-with-jee-advanced-mock-test.php" class="tran4s"></a>
	        					</div>
	        					<div class="text-wrapper">
	        						<div class="text tran4s">
	        							<a href="boost-your-preparation-with-jee-advanced-mock-test.php" class="title">Boost your Preparation with JEE Advanced Mock Test- Aadyas Academy </a>
	        							<p>As an Engineering student, you must be aware that practice is the key to success when it comes to the JEE Exam. Learning concepts and...</p>
	        							<a href="boost-your-preparation-with-jee-advanced-mock-test.php" class="button-29">Read More</a>
	        						</div> <!-- /.text -->
	        					</div> <!-- /.text-wrapper -->
	        			</div> <!-- /.single-post -->

	        			<div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
	        					<div class="img-holder">
	        						<!--<div class="date wow fadeInUp p-color-bg"></div>-->
	        						<img src="images/blog/blog-img2.jpeg" alt="Image">
	        						<a href="tips-for-preparing-competitive-exams.php" class="tran4s"></a>
	        					</div>
	        					<div class="text-wrapper">
	        						<div class="text tran4s">
	        							<a href="tips-for-preparing-competitive-exams.php" class="title">How to Prepare for any Competitive exam – Tips & Tricks</a>
	        							<p>Only by-passing competitive tests will you be able to get into lucrative government positions. Regular study combined with extracurricular...</p>
	        							<a href="tips-for-preparing-competitive-exams.php" class="button-29">Read More</a>
	        						</div> <!-- /.text -->
	        					</div> <!-- /.text-wrapper -->
	        			</div> <!-- /.single-post -->

	        		</div> <!-- /.post-wrapper -->
	        	</div> <!-- /.container -->
	        </div> <!-- /.latest-news -->

	        <?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>

		</div> <!-- /.main-page-wrapper -->
	</body>

</html>