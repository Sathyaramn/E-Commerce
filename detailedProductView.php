<?php
$productid=$_GET['productId'];
?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .container{
    background-color: pink;
    margin: 30px;
    padding: 30px;
  }
  .image-grid{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    text-align:center;
  }
  .img{
    height: 230px;
    width:260px;
  }
  form  { display: table;      }
  p     { display: table-row;   }
  label { display: table-cell;}
  textarea { display: table-cell;
  margin:5px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="image-grid">
      <?php
      $conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
      $sql="select * from  womenFashion where product_id=$productid";
      $execute_query=mysqli_query($conn,$sql);
      if(!$execute_query){
        echo " query failed";
      }
      $countOfrows=mysqli_num_rows($execute_query);
      if($countOfrows>0){
      $row=mysqli_fetch_assoc($execute_query);
      echo "<div><img src='../womenFashionImages/".$row['image1']."' alt='Los Angeles'class='img'></div>
         <div><img src='../womenFashionImages/".$row['image2']."' alt='Los Angeles' class='img'></div>
         <div><img src='../womenFashionImages/".$row['image3']."' alt='Los Angeles' class='img'></div>
         <div><img src='../womenFashionImages/".$row['image4']."' alt='Los Angeles' class='img'></div></div><br>
         <div style='text-align:center'><div>Product Name:".$row['productName']."</div>
         <div>Brand Name:".$row['brandName']."</div>
         <div>M.R.P: ".$row['mrp']."</div>
         <div>Price: ".$row['price']."</div>
         <div>Discount: ".$row['discount']."</div>
         <div>Additional Information: ".$row['additionalInfo']."</div>
         <a href='addToCart.php?adminid=".$row['admin_id']."&productid=".$row['product_id']."'><button><i class='fa fa-shopping-cart' style='font-size:19px'></i> Add to cart</button></a>
         <a href='addToWhishlist.php?adminid=".$row['admin_id']."&productid=".$row['product_id']."'><button><i class='fa fa-heart-o' style='font-size:19px;'></i> Whishlist</button></a></div>

         ";
    }
    $fee="select * from productfeedback where product_id=$productid";
    $efee=mysqli_query($conn,$fee);
  if(mysqli_num_rows($efee)>0){
    echo "<div>Feedback</div>";
      while($ans=mysqli_fetch_assoc($efee))
      {
        echo "<div>SATHYA</div>";
        $user=$ans['user_id'];
         $usql="select * from userPersonalDetails where user_id='$user'";
         $eusql=mysqli_query($conn,$usql);
         $reusql=mysqli_fetch_assoc($eusql);
         echo "<div><form><p><label>".$reusql['user_first_name']."</label></div>
         <textarea rows='3' cols='60' id='input1' name='address'>".$ans['feedback']."</textarea></p></form></div>";

      }
   }

    ?>
    </div>
  </div>
</body>
