<?php $daddress=$_GET['address'] ?>
<!DOCTYPE HTML>
<head>
  <style>
  .flex{
    padding: 30px;
    background-color:lightblue;
    display:grid;
    grid-template-columns: 1fr;
    margin:150px;
    margin-left: 200px;
    text-align: left;
    font-size: 20px;
  }
  .flex div{
  }
  </style>
</head>
<body>
      <div class="flex">
        <div class="address-bar">
          <div>Deliver to</div>
          <form method="post">
            <?php echo "<textarea type='text' rows='6' cols='60' name='address'>".$daddress."</textarea>"; ?>


        </div>
            <div>Choose payment Mode</div><br>

      <div><input type="checkbox" value="upi" name="upi">UPI/Net banking</input></div><br>
      <div><input type="checkbox" value="paytm" name="paytm">Paytm</input></div><br>
      <div><input type="checkbox" value="card" name='card'>Debit/Credit/ATM Card</input></div><br>
      <div><input type="checkbox" value="cod" name="cod">Cash on Delivery</input></div><br>
      <div><button type="submit" name="submit">Continue</button></div><br>
    </form>
  </div>
</body>
<?php
$upi=$_POST['upi'];
$paytm=$_POST['paytm'];
$card=$_POST['card'];
$cod=$_POST['cod'];
$address=$_POST['address'];
if(isset($_POST['submit'])){
  if($upi==="upi"){
    header("location:demo.php?address=$address&paymentMode=$upi");
  }
  if($paytm==="paytm"){
      header("location:order.php?address=$address&paymentMode=$paytm");
  }
  if($card==="card"){
      header("location:order.php?address=$address&paymentMode=$card");
  }
  if($cod==="cod"){
      header("location:order.php?address=$address&paymentMode=$cod");
  }
}
?>
