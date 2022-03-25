<?php

if(isset($_POST['name']))
{
    error_reporting(-1);
    ini_set('display_errors', 'On');
    
    
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    
    $mail->Host = 'smtp.gmail.com';
    // $mail->Host = 'mail.crkinfraprojects.com';
    $mail->port= 587;
    $mail->SMTPAuth= true;
    $mail->SMTPSecure= 'tls';
    $mail->Username='wajid98765@gmail.com';
    $mail->Password='wajid1990khan';
    $mail->SMTPDebug = 1;
    $mail->setFrom('info@aadyasacademy.com', $name);
    $mail->addAddress('rahul@aadyasacademy.com');
    // $mail->addAddress('wajid.developer1@gmail.com');
    // $mail->AddCC('wajid.developer1@gmail.com');
    
    
    $mail->isHTML(true);
    $mail->Subject='Brochure download enquiry';
    $mail->Body='<h3>Name : '.$name.'<br>Email : '.$email.'<br>Number : '.$number.'</h3>';
    
    if(!$mail->send())
    {
        echo "Somethng went wrong. Please try again. Mailer error: " . $mail->ErrorInfo;
    }
    else
    {
        $data['msg'] = "Thank you for contacting us, we will get back to you...";
        $data['dwnld_btn'] = '<a href="images/brochure.pdf" id="pdf_download_btn" download class="btn btn-success"><i class="fa fa-download"></i> Download</a>';
        echo json_encode($data);
    }
}

?>