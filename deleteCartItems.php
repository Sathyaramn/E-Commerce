<?php
session_start();
$conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
$user_id=$_SESSION['userId'];
$admin_id=$_SESSION['admin_id'];
$pid=$_GET['pid'];
$sql="delete from cartItems where user_id=$user_id and product_id=$pid";
$execute=mysqli_query($conn,$sql);
if($execute){
  header("location:displayCartItems.php?userid=$user_id&adminid=$admin_id");
}
?>
