<?php
$conn=mysqli_connect("localhost","root","root","Ecommerce");
$emailError="";
$mobileError="";

if($_SERVER["REQUEST_METHOD"]=="post"){
  $email=$_POST['email'];
  $mobile=$_POST['contact'];
  $checkEmailQuery="select * from adminPersonalDetails where admin_email='$email'";
  $checkMobileQuery="select * from adminPersonalDetails where mobile_number=$mobile";
  if(mysqli_num_rows(mysqli_query($conn,$checkEmailQuery))>0){
    $emailError="Email already exists";
  }
  if( mysqli_num_rows(mysqli_query($conn,$checkMobileQuery))>0){
    $mobileError="Mobile number already exists";
  }
}
 ?>
