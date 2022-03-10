
<?php
$conn=mysqli_connect("localhost","root","root","Ecommerce");
if(! $conn ) {
 die('Could not connect: ' . mysql_error());
}
else{
echo "Connected successfully";
}

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
  $password=$_REQUEST['password'];
  $Cpassword=$_REQUEST['confirmPassword'];
$sql="insert into adminPersonalDetails(admin_first_name,admin_last_name,store_name,admin_email,admin_address,city,district,state,pin,mobile_number,password,insert_date) values ('$fname','$lname','$storeName','$adminEmail','$adminAddress','$city','$district','$state','$pin','$adminMobile','$password',now())";
  if(mysqli_query($conn,$sql)){
    echo "Data inserted successfully";
  }
else{
  echo "password mismatch";
}

?>
