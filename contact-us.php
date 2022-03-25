<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themazine.com/html/edu/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Dec 2021 09:53:02 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Contact Us | Top Intermediate College in Hyderabad - AADYAS ACADEMY</title>
		<meta name="description" content="Join AADYAS ACADEMY, top intermediate college in hyderabad. Start your journey to a bright career. Make a choice of your own interest from integrated courses in MPC, MEC & CEC.">

		<?php require_once "links.php"; ?>
		<style>
		    .main-menu-wrapper .nav li.contact
            {
                position:relative;
            }
            .main-menu-wrapper .nav li.contact::after
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
		<div class="main-page-wrapper about-us-v1-page">


			<?php require_once "navbar.php"; ?>


			<!-- Inner Page Main Banner __________________ -->
			<div class="inner-page-banner">
				<div class="opacity">
					<div class="container">
						<h2>Contact us</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Contact us</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->


			<!-- Contact Us Form _____________________ -->
			<div class="contact-us-page">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft">
							<div class="contact-us-form">
								<h3>Send A Message</h3>
								<p>Your email address will not be published.</p>
								<form action="#" class="form-validation" autocomplete="off">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input name="name" id="full_name" type="text" placeholder="Username">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input name="email" id="email" type="email" placeholder="Email">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input type="text" class="form-control" minlength="10" maxlength="10" required onkeypress="return isNumberKey(event)" id="mobile" placeholder="Mobile Number" name="mobile">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input name="sub" id="mysubject" type="text" placeholder="Subject">
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<textarea name="message" id="msg1" placeholder="Write Message"></textarea>
											<button type="button" id="cont_submit1" class="tran3s p-color-bg themehover" title="Send">send message</button>
										</div>
									</div>
								</form>

								<!-- Contact alert -->
								<div class="alert_wrapper" id="alert_success">
									<div id="success">
										<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
										<div class="wrapper">
							               	<p>Your message was sent successfully.</p>
							             </div>
							        </div>
							    </div> <!-- End of .alert_wrapper -->
							    <div class="alert_wrapper" id="alert_error">
							        <div id="error">
							           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
							           	<div class="wrapper">
							               	<p>Sorry!Something Went Wrong.</p>
							            </div>
							        </div>
							    </div> <!-- End of .alert_wrapper -->
							</div> <!-- /.contact-us-form -->
						</div> <!-- /.col- -->

						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 wow fadeInRight">
							<div class="contactUs-address">
								<h3>CONTACT US</h3>
			        			<p>Welcome to our website , Feel free to contact us any time </p>

			        			<ul>
	        						<li>
	        							<i class="fa fa-envelope-o" aria-hidden="true"></i>
	        							<a href="mailto:info@aadyasacademy.com" class="tran3s">info@aadyasacademy.com</a>
	        						</li>
	        						<li>
	        							<i class="fa fa-phone" aria-hidden="true"></i>
	        							<a href="tel:+917207943360" class="tran3s">+91 720 794 3360 </a> / 
							            <a href="tel:+917207943361" class="tran3s">+91 720 794 3361</a>
	        						</li>
	        						<li><i class="fa fa-map-marker" aria-hidden="true"></i>SV NITYANTA ICON, #H.NO.8-2-293/174/1/10&11, Above Ratnadeep, Near KBR Park Main Gate, ROAD No:14, BANJARA HILLS, HYDERABAD.</li>
	        					</ul>

							</div> <!-- /.our-address -->
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.contact-us-page -->

            <br>
            <br>
			<!-- Google Map -->
			<!--<div id="google-map" style="height:460px; width:100%; margin-top:100px;"></div>-->




			<?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>
            <script>
                $(document).ready(function(){
                    $('#cont_submit1').click(function(){
                        var name = $('#full_name').val();
                        var email = $('#email').val();
                        var subject = $('#mysubject').val();
                        var mobile = $('#mobile').val();
                        var msg = $('#msg1').val();
                        if(name != '' || email != '' || mobile != '' || subject != '' || msg != '')
                        {
                            if(name == '')
                            {
                                alert('Please enter your name...!');
                                return false;
                            }
                            var email_resp1 = validateEmail(email);
                            if(email_resp1 == false)
                            {
                                alert('Please enter the valid email address');
                                return false;
                            }
                            if(mobile == '')
                            {
                                alert('Please enter your mobile number...!');
                                return false;
                            }
                            if(subject == '')
                            {
                                alert('Please enter your subject...!');
                                return false;
                            }
                            if(msg == '')
                            {
                                alert('Please enter your message...!');
                                return false;
                            }
                            
                            $.ajax({
                                url : 'email_code.php',
                                type : 'POST',
                                data : {name:name, email:email, mobile:mobile, mysubject:subject, msg:msg},
                                success : function(data){
                                    if(data == 1)
                                    {
                                        window.location.replace("https://aadyasacademy.com/thank-you.php");
                                    }
                                    else
                                    {
                                        alert("Something went wrong, please try again later...");
                                    }
                                    // alert("Enquiry has been sent successfully...");
                                    
                                    // $('#full_name').val('');
                                    // $('#email').val('');
                                    // $('#mysubject').val('');
                                    // $('#msg1').val('');
                                }
                            });
                            
                        }
                        else
                        {
                            alert('Please enter your details...');
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
	</body>

</html>




