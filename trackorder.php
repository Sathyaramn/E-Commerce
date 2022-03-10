<?php SESSION_START();
$id=$_SESSION['adminId'];
 ?>
<!DOCTYPE html>
<head>
  <style>
  .track-order-table{
    border-collapse: collapse;
  }
  .track-order-table td, .track-order-table th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  .track-order-table tr:nth-child(even){background-color: #f2f2f2;}

  .track-order-table  tr:hover {background-color: #ddd;}

  .track-order-table  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
</style>
</head>
<body>
<div class="track-order" id="track-order">
  <table style="width:100%" class="track-order-table" id="track-order-table">
    <thead>
      <tr>
        <th>Order Id</th>
        <th>Customer Name</th>
        <th>Location</th>
        <th>Bill Amount</th>
        <th>Delivery Status</th>
        <th>Payment Status</th>
        <th>More Details</th>
      </tr>
    </thead>
    <?php
    $conn=mysqli_connect("localhost","root","root","Ecommerce");
    $sql="select * from orderdetails where admin_id='$id'";
    $e_sql=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($e_sql)){
      $uid=$row['user_id'];
      $name="select * from userpersonaldetails where user_id='$uid'";
      $e_name=mysqli_fetch_assoc(mysqli_query($conn,$name));
        $oid=$row['order_id'];
      $pay="select * from paymentdetails where order_id='$oid'";
      $epay=mysqli_fetch_assoc(mysqli_query($conn,$pay));
    echo "<tr>
      <td>".$row['order_id']."</td>
      <td>".$e_name['user_first_name']." ".$e_name['user_last_name']."</td>
      <td>".$row['deliveryAddress']."</td>
      <td>".$row['total']."</td>
      <td>".$row['deliverystatus']."</td>
      <td>".$epay['paymentStatus']."</td>
      <td><a href='trackMoreOrder.php?order_id=".$oid."&userId=".$uid."'><button type='submit'>Click here</button></a></td>
    </tr>";
  }
    ?>
    <tbody>
    </tbody>
  </table>
</div>
</body>
