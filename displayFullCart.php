<?php
session_start();
$userId=$_SESSION['userId'];

?>
<!DOCTYPE html>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .topic{
    text-align:left;
    font-size: 30px;
    height: 50px;
    padding:10px;
    background-color: lightblue;
    padding-left: 30px;
    margin:34px;
  }
  .full-product{
    background-color: pink;
    padding: 10px;
    padding-left: 30px;
    margin:4px;
  }
  .container{
    margin: 34px;
    display:grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
  }
  </style>
</head>
<body>
  <div class="topic">
    My Cart
  </div>
  <div class="container">
  <?php
  $conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
  $sql="select admin_id from cartItems where user_id=$userId";
  $execute_query=mysqli_query($conn,$sql);
  if(!$execute_query){
    echo " query failed";
  }
  $countOfrows=mysqli_num_rows($execute_query);
  if($countOfrows>0){
  while($row=mysqli_fetch_assoc($execute_query)){
    $admin=$row['admin_id'];
    $productQuery=mysqli_query($conn,"select product_id from cartItems where admin_id=$admin and user_id=$userId");
    $pcount=mysqli_num_rows($productQuery);
    if($pcount>0){
    while($pro=mysqli_fetch_assoc($productQuery)){
      $pid=$pro['product_id'];
    $imageQuery="select * from womenFashion where product_id=$pid";
    $executeQuery=mysqli_query($conn,$imageQuery);
    $ans=mysqli_fetch_assoc($executeQuery);
    //echo $row['image1'];
    //echo "<img src='../womenFashionImages/".$row['image1']."' style{width:100px height=200px}/>";
  echo "<div class='full-product'>
  <div>
    <img src='../womenFashionImages/".$ans['image1']."' style{width:100px height=200px}/>
  </div>
  <div>".$ans['productName']." </div>
  <div>M.R.P: Rs ".$ans['mrp']."</div>
  <div>Price: Rs ".$ans['price']."</div>
  <div>Discount: ".$ans['discount']."%</div>
  <div><a href='addToCart.php?adminid=".$ans['admin_id']."&productid=".$ans['product_id']."'><button><i class='fa fa-shopping-cart' style='font-size:19px'></i> Add to cart</button> <button></a><i class='fa fa-heart-o' style='font-size:19px;'></i> Whishlist</button></div>
  </div>";
  }
  }
}
}
    ?>
  </div>
</body>
