<?php
session_start();
$userid=$_SESSION['userId'];
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
  grid-template-columns: 1fr 1fr 1fr 1fr;
}
</style>
</head>
<body>
  <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="userDetails.php" class="w3-bar-item w3-button">Profile</a>
  <a href="shopList.php" class="w3-bar-item w3-button">Shop List</a>
  <a href="displayFullCart.php" class="w3-bar-item w3-button">Cart</a>
  <a href="#" class="w3-bar-item w3-button">Orders</a>
  <a href="displayFullWhishlist.php" class="w3-bar-item w3-button">Whishlist</a>
  <a href="#" class="w3-bar-item w3-button">Chat</a>
  <a href="#" class="w3-bar-item w3-button">Feedback</a>
  <a href="#" class="w3-bar-item w3-button">Log out</a>
</div>
  <div>
  </div>

  <div style="background-color:lightblue">
  <button class="w3-button w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
    <h1>Women Fashion</h1>
  </div>
</div>

<div class="container">


  <?php
  $conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
  $sql="select * from  womenFashion";
  $execute_query=mysqli_query($conn,$sql);
  if(!$execute_query){
    echo " query failed";
  }
  $countOfrows=mysqli_num_rows($execute_query);
  if($countOfrows>0){
  while($row=mysqli_fetch_assoc($execute_query)){
    //echo $row['image1'];
    //echo "<img src='../womenFashionImages/".$row['image1']."' style{width:100px height=200px}/>";
  echo "<div class='full-product'>
  <div>
    <img src='../womenFashionImages/".$row['image1']."' style{width:100px height=200px}/>
  </div>
  <div>".$row['productName']." </div>
  <div>M.R.P: Rs ".$row['mrp']."</div>
  <div>Price: Rs ".$row['price']."</div>
  <div>Discount: ".$row['discount']."%</div>
  <div>
  <a href='addToCart.php?adminid=".$row['admin_id']."&productid=".$row['product_id']."'><button><i class='fa fa-shopping-cart' style='font-size:19px'></i> Add to cart</button></a>
  <a href='addToWhishlist.php?adminid=".$row['admin_id']."&productid=".$row['product_id']."'><button><i class='fa fa-heart-o' style='font-size:19px;'></i> Whishlist</button></a></div>

  </div>";
  }
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
