
<?php
session_start();
$id=$_SESSION['adminId'];
$conn=mysqli_connect("localhost","root","root","Ecommerce");
$emailError="";
$mobileError="";
$result="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $fname=$_REQUEST['firstName'];
  $lname=$_REQUEST['lastName'];
  $storeName=$_REQUEST['storeName'];
  $adminEmail=$_REQUEST['email'];
  $adminAddress=$_REQUEST['address'];
  $city=$_REQUEST['city'];
  $state=$_REQUEST['state'];
  $district=$_REQUEST['district'];
  $pin=$_REQUEST['pin'];
  $adminMobile=$_REQUEST['contact'];
  $checkEmailQuery="select * from adminPersonalDetails where admin_email='$adminEmail'";
  $checkMobileQuery="select * from adminPersonalDetails where mobile_number=$adminMobile";
  if(mysqli_num_rows(mysqli_query($conn,$checkEmailQuery))>0){
    $emailError="Email already exists";
  }
  if( mysqli_num_rows(mysqli_query($conn,$checkMobileQuery))>0){
    $mobileError="Mobile number already exists";
  }
  else{

    $update_query="update adminPersonalDetails set admin_first_name='$fname',admin_last_name='$lname', store_name='$storeName', admin_email='$adminEmail', admin_address='$adminAddress', city='$city', district='$district', state='$state', pin=$pin, mobile_number=$adminMobile where admin_id='$id'";
    $execute_update=mysqli_query($conn,$update_query);
    if($execute_update){
      $result="Updated successfully!";
  

    }
    else{
      $result="Error!";
    }
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
margin-top: 25px;
margin-bottom: auto;
background-color: skyblue;

}
form  { display: table;      }
p     { display: table-row;  }
label { display: table-cell;}
input { display: table-cell; }
form button{
  margin-left: 40px;
}
form input{
  width:360px;
  height:20px;
  /*pointer-events: none;*/
}
.form-1{
  text-align:left;
}
</style>

</head>
<body>
<div class="form-1" id="form-1">
<form id="personalForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
  <h3>Personal Information</h3>
<p>  <label>Admin Id:</label><input class="admin" type="text" name="adminId" value=<?php echo $_SESSION['adminId'] ?> disabled></input></p>
  <br>
    <p> <label>First Name:</label><input class="admin" type="text" name="firstName" value=<?php echo $_SESSION['fname'] ?> ></input></p>
      <br>
    <p> <label>Last Name:</label><input class="admin" type="text" name="lastName" value=<?php echo $_SESSION['lname'] ?>  ></input></p>
      <br>
    <p> <label>Store Name:</label><input class="admin" type="text" name="storeName" value=<?php echo $_SESSION['sname'] ?>  ></input></p>
      <br>
    <p> <label>Address</label><input class="admin" type="text" name="address" value=<?php echo $_SESSION['address'] ?>  ></input></p>
      <br>
      <p> <label>City:</label><input class="admin" type="text" name="city" value=<?php echo $_SESSION['city'] ?>  ></input></p>
        <br>
    <p> <label>District:</label><input class="admin" type="text" name="district" value=<?php echo $_SESSION['district'] ?>  ></input></p>
      <br>
    <p> <label>State:</label><input class="admin" type="text" name="state" value=<?php echo $_SESSION['state'] ?>  ></input></p>
      <br>
      <p> <label>Pin:</label><input class="admin" type="number" name="pin" value=<?php echo $_SESSION['pin'] ?>  ></input></p>
        <br>
    <p> <label>Email:</label><input class="admin" type="email" name="email" value=<?php echo $_SESSION['email'] ?>  ></input></p>
  <span style="color:red"> <?php echo $emailError; ?></span>
      <br>
    <p> <label>Contact:</label><input class="admin" type="number" name="contact" value=<?php echo $_SESSION['mobile'] ?>  ></input></p>
    <span style="color:red"> <?php echo $mobileError; ?></span>
      <br>

    <button type="submit" id="update" name="update" class="update">Update</button>
    <span style="color:green"> <?php echo $result; ?></span>
</form>
</div>

</body>
