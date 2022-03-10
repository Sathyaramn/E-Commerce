
<!DOCTYPE HTML>
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
  </style>
</head>
<body>
<table  style="width:100%" id="stock-table" class="stock-table">
  <thead>
    <tr>
      <th>Product Id</th>
      <th>Image</th>
      <th>M</th>
      <th>L</th>
      <th>S</th>
      <th>XS</th>
      <th>XL</th>
      <th>XXL</th>
      <th>XXXL</th>
      <th>Stock Status</th>
      <th>Update</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
  $sql="select * from womenFashionStock";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){
    $product_id=$row['product_id'];
    echo $product_id;
    $sizeL=$row['sizeL'];
    $sizeS=$row['sizeS'];
    $sizeM=$row['sizeM'];
    $sizeXS=$row['sizeXS'];
    $sizeXL=$row['sizeXL'];
    $sizeXXL=$row['sizeXXL'];
    $sizeXXXL=$row['sizeXXXL'];
    $stockStatus=$row['stockStatus'];
    $imagesql="select image1 from womenFashion where product_id='$product_id'";
    $imagequery=mysqli_query($conn,$imagesql);
    $imagerow=mysqli_fetch_assoc($imagequery);
    echo "<tr><td>".$product_id."</td><td><img src='../womenFashionImages/".$imagerow['image1']."' style{width:100px height=200px}/></td><td>".$sizeM."</td><td>".$sizeL."</td><td>".$sizeS."</td><td>".$sizeXS."</td><td>".$sizeXL."</td><td>".$sizeXXL."</td><td>".$sizeXXXL."</td><td>".$stockStatus."</td><td><button><a href='updateStock.php?productid=".$product_id."'>Update</a></button></td></tr>";
  }
   ?>
  </tbody>
</table>
</body>
