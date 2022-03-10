<?php SESSION_START();
$id=$_SESSION['adminId'];
 ?>
<!DOCTYPE html>
<head>
  <style>
  .customer-feedback-table{
    border-collapse: collapse;
  }
  .customer-feedback-table td, .customer-feedback-table th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  .customer-feedback-table tr:nth-child(even){background-color: #f2f2f2;}

  .customer-feedback-table tr:hover {background-color: #ddd;}

  .customer-feedback-table  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
  </style>
</head>
<html>
<div class="customer-feedback" id="customer-feedback">
  <table class="customer-feedback-table" style="width:100%">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Customer ID</th>
        <th>Product ID</th>
        <th>Product Image</th>
        <th>Customer Name</th>
        <th>Feedback</th>
        <th>Ratings</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i=0;
      $conn=mysqli_connect("localhost","root","root","Ecommerce");
      $sql="select * from productfeedback where admin_id='$id'";
      $execute=mysqli_query($conn,$sql);
      if(mysqli_num_rows($execute)>0){
      while($row=mysqli_fetch_assoc($execute)){
        $i=$i+1;
        $uid=$row['user_id'];
        $pid=$row['product_id'];
        $name="select * from userpersonaldetails where user_id='$uid'";
        $e_name=mysqli_fetch_assoc(mysqli_query($conn,$name));
        $img="select * from womenfashion where product_id='$pid'";
        $y_name=mysqli_fetch_assoc(mysqli_query($conn,$img));
      echo "<tr>
        <td>".$i."</td>
        <td>".$row['user_id']."</td>
        <td>".$row['product_id']."</td>
        <td><img src='../womenFashionImages/".$y_name['image1']."' style{width:100px height=200px}/></td>
        <td>".$e_name['user_first_name']." ".$e_name['user_last_name']."</td>
        <td>".$row['feedback']."</td>
        <td></td>
      </tr>";
    }
  }
      ?>
    </tbody>
  </table>
</div>
</html>
