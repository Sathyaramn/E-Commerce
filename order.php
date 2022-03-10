<?php
session_start();
$user_id=$_SESSION['userId'];
$admin_id=$_SESSION['admin_id'];
$sizeerr='';
$bill='';
$err='';
//echo $admin_id;
//echo $user_id;
$conn=mysqli_connect("localhost","root","root","Ecommerce");
$sqll="select product_id from  cartitems where admin_id=$admin_id and user_id=$user_id";
$execute_queryl=mysqli_query($conn,$sqll);
$productcount=mysqli_num_rows($execute_queryl);
$count=0;
if(isset($_POST['submit'])){
while($pro=mysqli_fetch_assoc($execute_queryl)){
  $pidd=$pro['product_id'];
  $stocksql="select * from womenfashionstock where product_id='$pidd'";
  $execute=mysqli_query($conn,$stocksql);
  $sizeStock=mysqli_fetch_assoc($execute);
  $a=$_POST[$pidd];
  $b=$_POST['stock'.$pidd];//quantity
  //echo $a;
  //echo $b;
  if(($a=='xxl'&&$b>$sizeStock['sizeXXL'])||($a=='m'&&$b>$sizeStock['sizeM'])
  ||($a=='l'&&$b>$sizeStock['sizeL'])||($a=='xxxl'&&$b>$sizeStock['sizeXXXL'])
  ||($a=='s'&&$b>$sizeStock['sizeS'])||($a=='xs'&&$b>$sizeStock['sizeXS'])||($a=='xl'&&$b>$sizeStock['sizeXL'])){
    $sizeerr="Choose quantity less than given";
  }
  else{
    $count=$count+1;
    $update="update cartitems set quantity='$b' where product_id='$pidd' and admin_id='$admin_id'";
    $execute=mysqli_query($conn,$update);
    /*if($execute){
      echo "updated";
    }*/
    if($count==$productcount){
      $bill="nowcango";
      //echo $bill;
    }
    //echo $count;
  }
  //echo $_POST['stock.$pro['product_id']'];

}

}
 ?>
<!DOCTYPE html>
<head>
  <style>
  .items{
    display:grid;
    grid-template-columns: 1fr 1fr 1fr;
  }
  .container{
    padding: 20px;
  }
  .grid{
    display:grid;
    grid-template-columns: 1fr;
    gap:20px 10px;
    margin: 40px;
    background-color: pink;
    padding: 20px;
    text-align: center;
  }
  td{
    text-align: center;
  }
  .total{
    text-align: right;
    padding: 0px;
  }
  hr{
    background-color:black;

  }

  </style>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div>Order</div>
    <div class="grid">
      <div class="grid-1">
        <div>Deliver to</div>
        <?php echo "<textarea type='text' rows='6' cols='100' name='address'>".$_GET['address']."</textarea>"; ?>
      </div>
      <div style='font-size:23px'>Items</div>
      <div class="items">

        <?php

        $sql="select product_id from  cartitems where admin_id=$admin_id and user_id=$user_id";
        $execute_query=mysqli_query($conn,$sql);
        if(!$execute_query){
          echo " query failed";
        }
        $countOfrows=mysqli_num_rows($execute_query);
        //echo $countOfrows;
        if($countOfrows>0){
        while($row=mysqli_fetch_assoc($execute_query)){
          $pid=$row['product_id'];
          $imageQuery="select * from womenFashion where product_id=$pid";
          $executeQuery=mysqli_query($conn,$imageQuery);
          $ans=mysqli_fetch_assoc($executeQuery);
          //echo $ans['image1'];
          //echo "<img src='../womenFashionImages/".$row['image1']."' style{width:100px height=200px}/>";
        echo "<div class='full-product'>
        <div>
          <img src='../womenFashionImages/".$ans['image1']."' style{width:100px height=200px}/>
        </div>
        <div>".$ans['productName']." </div>
        <div>M.R.P: Rs ".$ans['mrp']."</div>
        <div>Price: Rs ".$ans['price']."</div>
        <div>Discount: ".$ans['discount']."%</div>
      <form method='post' action=''>
        <div>Choose Size<select name='".$pid."' id='size' class='form-control'>
        <option value='m'>M</option>
        <option value='l'>L</option>
        <option value='s'>S</option>
        <option value='xs'>XS</option>
        <option value='xl'>XL</option>
        <option value='xxl'>XXL</option>
        <option value='xxxl'>XXXL</option>
    </select>";
 $stock="select * from womenfashionstock where product_id=$pid";
 $execute_stock_query=mysqli_query($conn,$stock);
 if($execute_stock_query){
   echo "success";
 }
 while($row=mysqli_fetch_assoc($execute_stock_query)){
   echo "<div>Available</div>";
   if($row['sizeM']>0){
     echo "<div>size M : ".$row['sizeM']."</div>";
   }
   if($row['sizeL']>0){
     echo "<div>size L : ".$row['sizeL']."</div>";
   }else if($row['sizeS']>0){
     echo "<div>size S : ".$row['sizeS']."</div>";
   }else if($row['sizeXS']>0){
     echo "<div>size XS : ".$row['sizeXS']."</div>";
   }else if($row['sizeXL']>0){
     echo "<div>size XL : ".$row['sizeXL']."</div>";
   }else if($row['sizeXXL']>0){
     echo "<div>size XXL : ".$row['sizeXXL']."</div>";
   }else if($row['sizeXXXL']>0){
     echo "<div>size XXXL : ".$row['sizeXXXL']."</div>";
   }
   else{
     echo "<div style='color:red'>out ot stock</div>";
   }
 }


    echo "</div>

      Add quantity <input style='width:30px' name='stock".$pid."' id='quantity'></input>
  <div><button><i class='fa fa-heart-o' style='font-size:19px;'></i> Whishlist</button></div>
      <div style='margin-left:230px'><a href='deleteCartItems.php?pid=".$pid."'><i class='fa fa-trash-o' style='font-size:24px'></i></a></div>
        </div>";
        }
        }
          ?>
            <div style="color:red"><?php echo $sizeerr ?></div>
          <div><button type='submit' name='submit'>CONFIRM PRODUCTS</button></div>
            </form>
      </div>
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
          $total=0;
          $sqli="select product_id,quantity from  cartitems where admin_id=$admin_id and user_id=$user_id";
          $execute_queryi=mysqli_query($conn,$sqli);
          while($pro=mysqli_fetch_assoc($execute_queryi)){
            $pid=$pro['product_id'];
            $quantity=$pro['quantity'];
            $imageQuery="select * from womenFashion where product_id='$pid'";
            $executeQuery=mysqli_query($conn,$imageQuery);
            $ans=mysqli_fetch_assoc($executeQuery);
              $total=$total+($quantity*$ans['price']);
            echo "came";
            echo "<tr><td>".$pid."</td><td><img src='../womenFashionImages/".$ans['image1']."' style{width:100px height=80px}/></td><td>".$quantity."</td><td>".$ans['price']."</td><td>".$quantity*$ans['price']."</td></tr>";
          }
           ?>
          </tbody>
        </table>
      </div>
    <hr NOSHADE="noshade">
    <div class="total"> Sub Total : Rs <?php echo $total; ?>/-</div>
    <div class="total">Shipping charges : 0/-</div>
        <hr NOSHADE="noshade">
        <div class="total">Total : Rs <?php echo $total; ?>/-</div>
          <hr NOSHADE="noshade">
          <div class="payment">
            <div>Payment method</div>
          </div><?php echo $_GET['paymentMode'] ?></div>
          <form method="post" action="">
          <button type="submit" name="order" id="order">Place Order</button>
        </form>
          </div>
  </div>
      </div>
      <script>
      document.getElementById('order').onclick=function(){
        <?php
        if(isset($_POST['order'])){
        $add=$_GET['address'];
        $query="insert into orderdetails(admin_id,user_id,deliveryAddress,total,date)values('$admin_id','$user_id','$add','$total',now())";
        $execute_order=mysqli_query($conn,$query);
         $id=mysqli_insert_id($conn);
         echo "sathy";
         $payMode=$_GET['paymentMode'];
         $payStatus="Pending";
         $payment="insert into paymentDetails(order_id,admin_id,user_id,paymentMode,paymentStatus)values('$id','$admin_id','$user_id','$payMode','$payStatus')";
         $paymentQuery=mysqli_query($conn,$payment);
        $cartsql="select * from cartItems where admin_id='$admin_id' and user_id='$user_id'";
        $cartsql_execute=mysqli_query($conn,$cartsql);
        while($wor=mysqli_fetch_assoc($cartsql_execute)){
          $proid=$wor['product_id'];
          $pricesql="select price from womenFashion where product_id=$proid";
          $runpricesql=mysqli_query($conn,$pricesql);
          $run=mysqli_fetch_assoc($runpricesql);
          $quan=$wor['quantity'];
          $pprice=$run['price'];
          $psql="insert into orderProducts(order_id,product_id,quantity,price)values('$id','$proid','$quan','$pprice')";
        $productorder=mysqli_query($conn,$psql);
        if($productorder){
          $deletesql="delete from cartItems where user_id='$user_id' and admin_id='$admin_id'";
          mysqli_query($conn,$deletesql);
          $err="Bill have been mailed to your email";
        }
        }
        $to_email = $_SESSION['email'];
        $subject = "Simple Email Test via PHP";
        $body = "Thank you...we have received your order";
        $headers = 'From:localdeveloper111@gmail.com'."\r\n";

        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
      }
        ?>
      }
      </script>
<h3><?php echo $err ?></h3>
</body>
