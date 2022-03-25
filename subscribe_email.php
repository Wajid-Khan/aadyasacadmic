<?php

if(isset($_POST['email']))
{
    $email = $_POST['email'];
    $con = mysqli_connect('localhost','aadyasac_ademy','SAf6$;GBPJu@','aadyasac_ademy');
    $date = date('Y-m-d');
    $sql = "INSERT INTO subscribes (email,created_on) values('$email','$date') ";
    $res = mysqli_query($con, $sql);
    if($res)
    {
        echo 'Your email address has been subscribed successfully...!';
    }
    else
    {
        echo 'Something went wrong, please try again after sometime...!';
    }
}

?>