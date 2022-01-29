<?php
include("PHP.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$data = json_decode(stripslashes($_POST['data']));
$to =$data->to;

$get = new Database();
$query= "SELECT Email FROM user WHERE '$to' = NIC ;";
$result = $get->Query($query) ;
   $row = mysqli_fetch_array($result);
   $to = $row['Email'] ;

$subject = $data->subject;
$message =$data->msg;
$headers = 'From: teampike105bar@gmail.com' . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$message,$headers);
    echo json_encode($data) ;  
}
?>
