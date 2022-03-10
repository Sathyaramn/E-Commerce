<?php
$conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
  $id=$_GET['productid'];
$sql="select * from womenFashionStock where product_id=$id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
$product_id=$row['product_id'];
$sizeL=$row['sizeL'];
$sizeS=$row['sizeS'];
$sizeM=$row['sizeM'];
$sizeXS=$row['sizeXS'];
$sizeXL=$row['sizeXL'];
$sizeXXL=$row['sizeXXL'];
$sizeXXXL=$row['sizeXXXL'];
$stockStatus=$row['stockStatus'];
if(isset($_POST['submit'])){
  $sizeL=$_POST['sizeL'];
  $sizeS=$_POST['sizeS'];
  $sizeM=$_POST['sizeM'];
  $sizeXS=$_POST['sizeXS'];
  $sizeXL=$_POST['sizeXL'];
  $sizeXXL=$_POST['sizeXXL'];
  $sizeXXXL=$_POST['sizeXXXL'];
  $stockStatus=$_POST['stockStatus'];
  $sql="update womenFashionStock set sizeL=$sizeL,sizeS=$sizeS,sizeM=$sizeM,sizeXS=$sizeXS,sizeXL=$sizeXL,sizeXXL=$sizeXXL,sizeXXXL=$sizeXXXL where product_id=$id";
if(mysqli_query($conn,$sql)){
  header("location:womenFashionStock.php");
}
}

?>
<!DOCTYPE HTML>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  form{
  padding:40px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 40px;
  margin-bottom: auto;
  background-color: skyblue;

  }
  form  { display: table;      }
  p     { display: table-row;   }
  label { display: table-cell;}
  input { display: table-cell;
  margin:5px; }
  select { display: table-cell;
  margin:3px; }
  form button{
    margin-left: 140px;
  }
  form input{
    width:360px;
    height:25px;
    /*pointer-events: none;*/
  }
p{
    margin-bottom: 15px;
  }
  </style>
</head>
<body>
  <div>
    <form method="post" enctype="multipart/form-data">
      <h3>Update Stock Details</h3>
      <p><label>Product Id</label><input type="number" value=<?php echo $product_id ?> disabled></input></p>
      <p><label>M</label><input value=<?php echo $sizeM ?> name="sizeM"></input></p>
      <p><label>L</label><input value=<?php echo $sizeL ?> name="sizeL"></input></p>
      <p><label>S</label><input value=<?php echo $sizeS ?> name="sizeS"></input></p>
      <p><label>XS</label><input value=<?php echo $sizeXS ?> name="sizeXS"></input></p>
      <p><label>XL</label><input value=<?php echo $sizeXL?> name="sizeXL"></input></p>
      <p><label>XXL</label><input value=<?php echo $sizeXXL ?> name="sizeXXL"></input></p>
      <p><label>XXXL</label><input value=<?php echo $sizeXXXL ?> name="sizeXXXL"></input></p>
      <p><label>Stock Status</label><select name="stockStatus">
    <option value="In stock">In stock</option>
    <option value="Out of Stock">Out of Stock</option>
  </select></p>
  <button type="submit" name="submit">Update</button>

    </form>
  </div>
</body>
