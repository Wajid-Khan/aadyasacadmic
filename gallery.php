<?php $var = 'current-page-item'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Intermediate &Junior College - Gallery Page | AADYAS ACADEMY, Hyderabad</title>
        <meta name="description" content="Get the Overall views of AADYAS ACADEMYlike Classrooms, Libraries Offices, Corridors, Playing ground, Functions’ pictures in the Gallery Page.">


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
            .teacher-profile img{
                border-radius:5px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
            .brochure-bg{
                background:url('images/brochure-bg.jpg');
                background-position:0px -281px;
                background-size:cover;
                position:relative;
                padding:50px 0;
            }
            .brochure-bg::before{
                content:'';
                position:absolute;
                top:0;
                left:0;
                right:0;
                bottom:0;
                width:100%;
                height:100%;
                background:rgb(0 0 0 / 60%);
            }
            .brochure-bg h1, .brochure-bg a{
                color:#fff;
                position:relative;
                z-index:99;
                font-size:25px;
                text-align:;
            }
            .myflex{
                display:flex;
                justify-content:space-around;
                align-items:center;
            }
            .brochure-bg a{
                background: #50a350;
                border-radius: 5px;
                font-size: 20px;
            }
            .btn-primary{
                background:#286090;
                color:#fff;
                border-radius:4px;
            }
            .modal-body .btn-primary{
                background:#286090;
                color:#fff;
                border-radius:4px;
            }
            .main-menu-wrapper .nav li.gallery
            {
                position:relative;
            }
            .main-menu-wrapper .nav li.gallery::after
            {
                content: '';
                position: absolute;
                bottom: 1px;
                height: 4px;
                background: #2e3192;
                width: 100%;
            }
            .margin-bottom-30{
                margin-bottom:30px;
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
						<h2>Gallery</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Gallery</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


	        <!-- Teacher Profile Page  ___________________ -->
	        <div class="teacher-profile">
	        	<div class="container">
	        	    
	        		<div class="row">
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/image1.jpeg" alt="" class="img-responsive">
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/image2.jpeg" alt="" class="img-responsive">
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/image3.jpeg" alt="" class="img-responsive">
	        			</div>
	        		</div>
	        		<div class="row">
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/gallery/Classroom-View-01.jpg" alt="" class="img-responsive">
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/gallery/Classroom-View-02.jpg" alt="" class="img-responsive">
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/gallery/Classroom-View-03.jpg" alt="" class="img-responsive">
	        			</div>
	        		</div>
	        		<div class="row">
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/gallery/Chemistry-Lab-View-01.jpg" alt="" class="img-responsive">
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/gallery/Chemistry-Lab-View-02.jpg" alt="" class="img-responsive">
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/gallery/Chemistry-Lab-View-03.jpg" alt="" class="img-responsive">
	        			</div>
	        		</div>
	        		<div class="row">
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/gallery/Physics-Lab-View-01.jpg" alt="" class="img-responsive">
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/gallery/Physics-Lab-View-02.jpg" alt="" class="img-responsive">
	        			</div>
	        		</div> <!-- /.row -->
	        		
	        		<div class="row">
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/shikha-1.jpg" alt="" class="img-responsive">
	        			</div>
	        			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-bottom-30">
	        				<img src="images/shikha-2.jpg" alt="" class="img-responsive">
	        			</div>
	        		</div> <!-- /.row -->
	        		<br>

	        		
	        	</div> <!-- /.container -->
	        </div> <!-- /.teacher-profile -->
	        
	        <!-- SubsCribe Banner ___________________ -->
            <div class="brochure-bg wow fadeInUp">
            	<div class="container">
            	    <div class="myflex">
            	        <h1>Download Brochure </h1>
            	        <!--<a style="" href="images/brochure.pdf" download class="btn btn-success"><i class="fa fa-download"></i> Download</a>-->
            	        <a style="" href="javascript:void()" id="download_click" class="btn btn-success"><i class="fa fa-download"></i> Download</a>
            	    </div>
            	</div>
            </div>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Please fill the below detail to download brochure!</h4>
                  </div>
                  <div class="modal-body">

                      <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" class="form-control" id="full_name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <label for="number">Phone Number:</label>
                        <input type="text" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" class="form-control" id="number">
                      </div>
                      <div class="form-group">
                        <button type="button" id="submit2" class="btn btn-primary">Submit</button>
                      </div>

                  </div>
                </div>
            
              </div>
            </div>

            <!-- Modal -->
            <div id="download_modal" class="modal fade" role="dialog">
              <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Download Brochure</h4>
                  </div>
                  <div class="modal-body">

                      <span id="download_brochure_pdf"></span>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            
              </div>
            </div>
	        <!-- Our Teacher ________________________ -->
            
            <?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>   
			<script>
			    $(document).ready(function(){
			        // Open form
			        $('#download_click').click(function(){
			            $('#myModal').modal('show');
			        });
			        
			        // Submit form
			        $('#submit2').click(function(){
                        var user_name = $('#full_name').val();
                        var user_email = $('#email').val();
                        var user_number = $('#number').val();
                        if(user_name != '' || user_email != '' || user_number != '')
                        {
                            if(user_name == '')
                            {
                                alert('Please enter your name...!');
                                return false;
                            }
                            var email_resp1 = validateEmail(user_email);
                            if(email_resp1 == false)
                            {
                                alert('Please enter the valid email address');
                                return false;
                            }
                            if(user_number == '')
                            {
                                alert('Please enter your number...!');
                                return false;
                            }
                            
                            $.ajax({
                                url : 'brochure_user_details.php',
                                type : 'POST',
                                data : {name:user_name, email:user_email, number:user_number},
                                success : function(data){
                                    var parse = $.parseJSON(data);
                                    alert(parse['msg']);
                                    $('#download_brochure_pdf').html(parse['dwnld_btn']);
                                    $('#myModal').modal('hide');
                                    $('#full_name').val('');
                                    $('#email').val('');
                                    $('#number').val('');
                                    $('#download_modal').modal('show');
                                }
                            });
                            
                        }
                        else
                        {
                            alert('Please fill up the form to download brochure...');
                            return false;
                        }
                    
                    });

                    
			    });
			    function validateEmail(email){ 
                    var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
                    return re.test(email); 
                }
                function isNumberKey(evt){
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                    return true;
                }
			</script>

		</div> <!-- /.main-page-wrapper -->
            
</html>