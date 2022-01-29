<?php
include("PHP.php");
$check = new Database();

$data = json_decode(stripslashes($_POST['data']));
$nic =$data->nic;

 $query_email = "SELECT Email from user where NIC = '$nic';";
    $result_email = $check->Query($query_email) ;
    $data_email = mysqli_fetch_array($result_email);

    foreach ($data_email as $value) {
        $email = $value;
    }



    $to =  $email;
    
    $subject = "Parking Reservation System";
    $message = "Sorry ! ,Your Reservation is aborted by Admin";
    $headers = 'From: miraflorcedric16@gmail.com' . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    mail($to,$subject,$message,$headers);
      



?>