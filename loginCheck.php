<?php
session_start();
$user_id="";
$passwordErr="";
$emailErr="";
$result="";
$SuccessResult="";
$FailResult="";
$emailExistError="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $password=$_POST['password'];
  $email=$_POST['email'];
  $conn=mysqli_connect("localhost","root","root","Ecommerce");
  $sql="select * from adminPersonalDetails where admin_email='$email' and password='$password'";
  $execute_query=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($execute_query);
  $_SESSION['adminId']=$row['admin_id'];
  $_SESSION['fname']=$row['admin_first_name'];
  $_SESSION['lname']=$row['admin_last_name'];
  $_SESSION['sname']=$row['store_name'];
  $_SESSION['address']=$row['admin_address'];
  $_SESSION['email']=$row['admin_email'];
  $_SESSION['city']=$row['city'];
  $_SESSION['district']=$row['district'];
  $_SESSION['state']=$row['state'];
  $_SESSION['pin']=$row['pin'];
  $_SESSION['mobile']=$row['mobile_number'];
  if(mysqli_num_rows($execute_query)==1){
      $SuccessResult="success";
      header("location:adminn.php");
    }
  else{
      $FailResult="Invalid Login Credentials";
    }

}
?>
