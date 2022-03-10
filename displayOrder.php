<?php
session_start();
$userid=$_SESSION['userId'];
$admin_id=$_GET['adminid'];
echo $admin_id;
?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.full-product{
  background-color: pink;
  padding: 10px;
  padding-left: 30px;
  margin:4px;
}
.container{
  margin: 34px;
  display:grid;
  grid-template-columns: 1fr;
}
.image{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
}
</style>
</head>
<body>



  <div style="background-color:lightblue">
  <div class="w3-container">
    <h1>My Orders</h1>
  </div>
</div>

<div class="container">

  <?php
  $conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
  $sql="select order_id from orderDetails where user_id='$userid' and admin_id='$admin_id'";
  $order_query=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($order_query)){
    $orderId=$row['order_id'];
    echo "<div class='full-product'>";
    $payquery="select paymentStatus from paymentDetails where order_id='$orderId'";
    $payment=mysqli_fetch_assoc(mysqli_query($conn,$payquery));
    echo "<div>Order Id: ".$orderId."</div>";
    echo "<div>Delivery Status: ".$payment['paymentStatus']."</div>";
    echo "<br><div class='image'>";
    $img="select product_id from orderproducts where order_id='$orderId'";
    $img_query=mysqli_query($conn,$img);
    while($ans=mysqli_fetch_assoc($img_query)){
      $productId=$ans['product_id'];
      $imagequery="select image1 from womenFashion where product_id='$productId'";
      $img1=mysqli_query($conn,$imagequery);
      $dis=mysqli_fetch_assoc($img1);
      echo "<div><img src='../womenFashionImages/".$dis['image1']."' style{width:100px height=100px}/></div>";
      echo "  ";
    }
    echo "</div><br>";

    echo "<div><a href='moreOrderDetails.php?order_id=".$orderId."'><button type='submit'>View More details</button></a></div>";
    echo "</div>";
  }
   ?>

</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
