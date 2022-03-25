<?php

if(isset($_POST['name']))
{
    error_reporting(-1);
    ini_set('display_errors', 'On');
    
    
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mysubject = $_POST['mysubject'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];
    
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
    $mail->addBCC('spandana9695@gmail.com');
    
    
    $mail->isHTML(true);
    $mail->Subject=$mysubject;
    $mail->Body='<h3>Name : '.$name.'<br>Email : '.$email.'<br>Mobile : '.$mobile.'<br>Message : '.$msg.'</h3>';
    
    if(!$mail->send())
    {
        echo "Somethng went wrong. Please try again. Mailer error: " . $mail->ErrorInfo;
    }
    else
    {
        echo 1;
    }
}

?>