<?php
session_start();
$result="";
$adminId=$_GET['adminid'];
$userId=$_SESSION['userId'];
$productId=$_GET['productid'];
$conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
$checksql="select * from whishlistItems where product_id=$productId and user_id=$userId";
$execute=mysqli_query($conn,$checksql);
$count=mysqli_num_rows($execute);
if($count==0){
$sql="insert into whishlistItems(product_id,admin_id,user_id) values($productId,$adminId,$userId)";
$execute_sql=mysqli_query($conn,$sql);

if($execute_sql){
  $result="Added!";
  header("location:userViewProducts.php?cresult=$result&adminid=$adminId");
  echo $result;
}
}
else{
  header("location:userViewProducts.php?cresult=$result&adminid=$adminId");
}
?>
<!DOCTYPE html>
<head>
</head>
<body>
</body>
