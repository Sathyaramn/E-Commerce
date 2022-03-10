<?php session_start();
$user_id=$_GET['userId'];
$admin_id=$_SESSION['adminId'];
$orderId=$_GET['order_id'];
$ansss='';
 $conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['feedback'])){
    $sql2="select * from orderProducts where order_id='$orderId'";
    $execute2=mysqli_query($conn,$sql2);
    while($row2=mysqli_fetch_assoc($execute2)){
      $productid=$row2['product_id'];
      $feedback=$_POST[$productid];
      if(!empty($feedback)){
      $feed="insert into productfeedback(product_id,admin_id,user_id,feedback,ftime)values('$productid','$admin_id','$user_id','$feedback',now())";
      $feed_query=mysqli_query($conn,$feed);
    }
    }

  }
}
?>
<!DOCTYPE html>
<head>
  <style>
  .stock-table{
    border-collapse: collapse;
  }
  .stock-table td, .stock-table th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  .stock-table tr:nth-child(even){background-color: #f2f2f2;}

  .stock-table  tr:hover {background-color: #ddd;}

  .stock-table  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
  .total{
    text-align: right;
    margin-right: 10px;
  }
  hr{
    background-color:black;

  }
  td{
    text-align: center;
  }
  .feedback,.address,.payment{
    text-align: center;
    padding: 10px;
    margin: 30px;
    background-color: lightblue;
    }
  .container{
    margin: 30px;
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="bill">
      BILL

      <table  style="width:100%" id="stock-table" class="stock-table">
        <thead>
          <tr>
            <th>Product Id</th>
            <th>Image</th>
            <th>Quantity</th>
            <th>Price with dicount</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        <?php
     $sql="select * from orderProducts where order_id='$orderId'";
     $execute=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($execute)){
       $productid=$row['product_id'];
       $quan=$row['quantity'];
       $price=$row['price'];
       $img="select image1 from womenFashion where product_id='$productid'";
       $execute_img=mysqli_query($conn,$img);
       $ans=mysqli_fetch_assoc($execute_img);
       echo "<tr><td>".$productid."</td><td><img src='../womenFashionImages/".$ans['image1']."' style{width:50px height=100px}/></td><td>".$quan."</td><td>".$price."</td><td>".$quan*$price."</td></tr>";
     }


         ?>
        </tbody>
      </table>
    </div>
<?php
$order="select * from orderdetails where order_id='$orderId'";
$execute_order=mysqli_query($conn,$order);
$a=mysqli_fetch_assoc($execute_order);
$total=$a['total'];
$address=$a['deliveryAddress'];
$pay="select * from paymentdetails where order_id='$orderId'";
$pay_execute=mysqli_query($conn,$pay);
$b=mysqli_fetch_assoc($pay_execute);
$paysts=$b['paymentStatus'];

 ?>
    <hr NOSHADE="noshade">
    <div class="total"> Sub Total : Rs <?php echo $total; ?>/-</div>
    <div class="total">Shipping charges : 0/-</div>
        <hr NOSHADE="noshade">
        <div class="total">Total : Rs <?php echo $total; ?>/-</div>
          <hr NOSHADE="noshade">
          <div class="payment">
  </div>
  <div class="address">
<div>Delivery Address:</div><div style="margin-left:150px">   <?php echo $address ?></div>
</div>


  <div class="payment">
<div>Payment Status: <div style="margin-left:150px"><?php echo $paysts ?></div></div>
  </div>





</div>
</body>
