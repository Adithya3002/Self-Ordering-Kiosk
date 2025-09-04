<!doctype html>
<?php
if(isset($_POST['login'])){
// Authorisation details.
$username = "otpphp@gmail.com";
$hash = "3eab60ec988c461f0cfc0e6ed6ed7b0b9bfc0b72e462dfdb2492b447223422d7";
 
// Config variables. Consult http://api.txtlocal.com/docs for more info.
$test = "0";
$name =$_POST['name'];
 
// Data for text message. This is the text message data.
$sender = "API Test"; // This is who the message appears to be from.
$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
$otp=mt_rand(100000,999999);
setcookie("otp", $otp);
$message = "Hey ".$name. "your OTP IS ".$otp;
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
$ch = curl_init('http://api.txtlocal.com/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
echo("OTP SEND SUCCESSFULLY");
curl_close($ch);
}
if(isset($_POST['ver'])){
$verotp=$_POST['otp'];
if($verotp==$_COOKIE['otp']){
echo("logined successfully");
 
}else{
echo("otp worng");
}
}
?>