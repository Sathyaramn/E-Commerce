<?php
session_start();
$admin_id=$_SESSION['admin_id'];
echo $admin_id;
if(isset($_POST['Submit'])){
  $address=$_POST['address'];
  $newaddress=$_POST['newaddress'];
  if($_POST['check1']=='1'){
  header("location:paymentMode.php?address=$address");
}
if($_POST['check2']=='2'){
header("location:paymentMode.php?address=$newaddress");
}
//echo $_POST['check2'];
  echo $address;

}
 ?>
<!DOCTYPE html>
<head>
  <style>
  .container{
    padding: 30px;
    background-color:lightblue;
    display:grid;
    grid-template-columns: 1fr;
    margin:150px;
    text-align: center;
  }
  </style>
</head>
<body>
  <div class="container">
    <div>Delivery Address</div>
    <form method="post">
    <div><input id="check1" name="check1" type="checkbox" value="1"></input><textarea rows="6" cols="60" id="input1" name="address">SATHYA RAM N,15/32 opposite canara bank market junction kulasekharam</textarea></div>
    <div><div>Add a new Address</div><input name="check2" id="check2" type="checkbox" value="2"></input><textarea rows="6" cols="60" id="input2" name="newaddress"></textarea></div>
    <div><button name="Submit" id="Submit" type="submit">Deliver to this address</button></div>
  </form>
  </div>
  <script>
  document.getElementById('Submit').onclick=function(){
      window.location.href="paymentMode.php";
    if(document.getElementById('check1').checked===true){
      var address=document.getElementById('input1').value;
      window.location="paymentMode.php";
      //alert(address);
    }
    else if(document.getElementById('check2').checked===true){
      var address=document.getElementById('input2').value;
      window.location.href="paymentMode.php?daddress=address";
      //alert(address);
    }
    else{
      alert("Enter Delivery Address");
    }

  }
  </script>
</body>
