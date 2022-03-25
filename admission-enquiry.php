<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Admission Enquiry | Best Junior College in Hyderabad - AADYAS ACADEMY</title>
		<meta name="description" content="Admission Enquiry">


		<?php require_once "links.php"; ?>
	    
	       <style>
	       .form-div{
      			background: #fff;
      			margin: 100px 0;
      			padding: 20px;
      			border-radius: 4px;
      		}
      		.page-breadcrum ul {
                margin-bottom: 0 !important;
            }
            .adm-enquiry .mybtn{
                background: #2e3192;
                color: #fff;
                border-radius: 5px;
            }
            .adm-enquiry .mybtn:hover{
                opacity:.8;
            }
            .form-group{
                margin-bottom:25px;
            }
            .error{
                color:red;
                font-size:14px;
                position: absolute;
                bottom: 5px;
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
						<h2>Admission Enquiry</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.inner-page-banner -->


			<!-- Page Breadcrum __________________________ -->
			<div class="page-breadcrum">
				<div class="container">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>-</li>
						<li>Admission Enquiry</li>
					</ul>
				</div> <!-- /.container -->
			</div> <!-- /.page-breadcrum -->

	        
            <section class="adm-enquiry" style="background-image:url('images/ae-bg.jpg');background-size: cover;background-repeat: no-repeat;">
            	<div class="container">
            		<div class="row">
            			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-12">
            				<div class="form-div">
            					<h3 class="text-center">Admission Enquiry</h3>
            					<hr>
            					<form id="myForm">
            						<div class="row">
            							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
            								<div class="form-group">
            									<select class="form-control" id="academic_year" name="academic_year" required style="position:relative;">
            										<option value="" selected disabled>Select Academic Year</option>
            										<option value="2022-2023">2022 - 2023</option>
            									</select>
            									<span class="error academic"></span>
            								</div>
            								
            							</div>
            							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
            								<div class="form-group">
            									<select class="form-control" id="course" name="course" required>
            										<option value="" selected disabled>Select Course</option>
            										<option value="MPC with Engineering Entrance Exam">MPC with Engineering Entrance Exam</option>
            										<option value="MPC with Design Entrance Exam">MPC with Design Entrance Exam</option>
            										<option value="MPC with Architecture Entrance Exam">MPC with Architecture Entrance Exam</option>
            										<option class="divider" disabled>---------------------------------------------</option>
            										<option value="MEC with LAW Entrance Exam">MEC with LAW Entrance Exam</option>
            										<option value="MEC with MANAGEMENT Entrance Exam">MEC with MANAGEMENT Entrance Exam</option>
            										<option value="MEC with Hotel Management Entrance Exam">MEC with Hotel Management Entrance Exam</option>
            										<option value="MEC with CA Foundation">MEC with CA Foundation</option>
            										<option class="divider" disabled>---------------------------------------------</option>
            										<option value="HEC with Design Entrance Exam ">HEC with Design Entrance Exam </option>
            										<option value="HEC with LAW Entrance Exam">HEC with LAW Entrance Exam</option>
            										<option value="HEC with MANAGEMENT Entrance Exam">HEC with MANAGEMENT Entrance Exam</option>
            										<option value="HEC With Hotel Management Entrance Exam">HEC With Hotel Management Entrance Exam</option>
            										<option class="divider" disabled>---------------------------------------------</option>
            										<option value="CEC With LAW Entrance Exam">CEC With LAW Entrance Exam</option>
            										<option value="CEC With MANAGEMENT Entrance Exam">CEC With MANAGEMENT Entrance Exam</option>
            										<option value="CEC With Hotel Management Entrance Exam">CEC With Hotel Management Entrance Exam</option>
            										<option value="CEC With CA Foundation">CEC With CA Foundation</option>
            									</select>
            									<span class="error course"></span>
            								</div>
            							</div>
            							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
            								<div class="form-group">
            									<input type="text" name="student_name" id="student_name" placeholder="Student Name" class="form-control" required>
            								</div>
            							</div>
            							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
            								<div class="form-group">
            									<input type="text" name="parent_name" id="parent_name" placeholder="Parent Name" class="form-control" required>
            								</div>
            							</div>
            							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
            								<div class="form-group">
            									<input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
            								</div>
            							</div>
            							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
            								<div class="form-group">
            									<input type="text" name="mobile" id="mobile" minlength="10" maxlength="10" onkeypress="return isNumberKey(event)" placeholder="Mobile" class="form-control" required>
            								</div>
            							</div>
            							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
            								<div class="form-group">
            									<input type="button" id="submit" value="Submit" class="btn btn-primary btn-block mybtn">
            								</div>
            							</div>
            						</div>
            					</form>
            				</div>
            			</div>
            			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
            				<div class="img-div">
            					
            				</div>
            			</div>
            		</div>
            	</div>
            </section>        

	        <!-- Our Teacher ________________________ -->
            
            <?php require_once "footer.php"; ?>
			<?php require_once "scripts.php"; ?>

		</div> <!-- /.main-page-wrapper -->
    <script>
    
    $(document).ready(function(){
        $('#submit').click(function(){
            var academic_year = $('#academic_year').val();
            var course = $('#course').val();
            var student_name = $('#student_name').val();
            var parent_name = $('#parent_name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            if(academic_year != '' || academic_year != null || course != null || student_name != '' || parent_name != '' || email != '' || mobile != '')
            {
                if(academic_year == '' || academic_year == null)
                {
                    $('.academic').text('Please select the academic year...');
                    $('#academic_year').css('border','1px solid red');
                    return false;
                }
                if(course == '' || course == null)
                {
                    $('.course').text('Please select the course...');
                    $('#course').css('border','1px solid red');
                    return false;
                }
                if(student_name == '')
                {
                    alert('Please enter student name...!');
                    return false;
                }
                if(parent_name == '')
                {
                    alert('Please enter parent name...!');
                    return false;
                }
                if(email == '')
                {
                    alert('Please enter your email...!');
                    return false;
                }
                if(email != '')
                {
                    var email_resp1 = validateEmail(email);
                    if(email_resp1 == false)
                    {
                        alert('Please enter the valid email address');
                        return false;
                    }
                }
                if(mobile == '')
                {
                    alert('Please enter your mobile number...!');
                    return false;
                }
                    
                
                $.ajax({
                    url : 'admission_data.php',
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
        $('#academic_year').on('change', function() {
          $(this).css('border','1px solid #ccc');
          $('.academic').text('');
        });
        $('#course').on('change', function() {
          $(this).css('border','1px solid #ccc');
          $('.course').text('');
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
</html>