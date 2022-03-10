<?php
session_start();
?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .container{
    margin: 60px;
    display:grid;
    grid-template-columns: 1fr;
  }
  .store{
    background-color: pink;
    padding: 15px;
    margin-bottom:10px;
  }
  a {
  color: inherit; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
}
  .icons{
    padding-left:500px;
  }
  </style>
</head>
<body>
  <div class="container">

<?php
$conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
$sql="select * from adminPersonalDetails";
$execute_query=mysqli_query($conn,$sql);
if(!$execute_query){
  echo " query failed";
}
$countOfrows=mysqli_num_rows($execute_query);
if($countOfrows>0){
while($row=mysqli_fetch_assoc($execute_query)){
  echo "<div class='store'><h3 style='font-weight: bold'>".$row['store_name']."</h3>
<div>Address</div>
<div style='padding-left:60px'>".$row['admin_address'].",".$row['city'].",".$row['district'].",".$row['state'].",".$row['pin']."</div>
<br><button><a href='userViewProducts.php?adminid=".$row['admin_id']."'>View Products</a></button>
<div class='icons'>
<i class='fa fa-envelope' style='font-size:36px'></i>
<i class='fa fa-paper-plane' style='font-size:36px'></i>
<i class='fa fa-phone' style='font-size:36px'></i>
</div>
  </div>";
}
}
 ?>

  </div>
</body>
