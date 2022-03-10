<?php
  $conn=mysqli_connect("localhost","root","root","Ecommerce");
$fnameErr="";
$errMsg="";
$emailErrMsg="";
$mobileErr="";
$pinErr="";
$snameErr="";
$addressErr="";
$cityErr="";
$districtErr="";
$stateErr="";
$emailEmptyErr="";
$passwordErr="";
$passError="";
$cpassErr="";
$lnameErrMsg="";
$districtErrMsg="";
$stateErrMsg="";
$cityErrMsg="";
$resultMsg="";
$userExistsError="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $fname=$_REQUEST['firstName'];
  $lname=$_REQUEST['lastName'];
  $userEmail=$_REQUEST['email'];
  $userAddress=$_REQUEST['address'];
  $city=$_REQUEST['city'];
  $state=$_REQUEST['state'];
  $district=$_REQUEST['district'];
  $pin=$_REQUEST['pin'];
  $userMobile=$_REQUEST['contact'];
  $password=$_REQUEST['password'];
  $Cpassword=$_REQUEST['confirmPassword'];
  if(empty($_POST["firstName"])){
    $fnameErr="Name is required";
  }
  if(empty($_POST["address"])){
    $addressErr="Address is required";
  }

  if(empty($_POST["city"])){
    $cityErr="city is required";
  }
  if(empty($_POST["district"])){
    $districtErr="district is required";
  }
  if(empty($_POST["state"])){
    $stateErr="state is required";
  }
  if(empty($_POST["password"])){
    $passwordErr="password is required";
  }
  if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {
    $errMsg = "Only alphabets and whitespace are allowed.";
  }
  if (!preg_match ("/^[a-zA-z]*$/", $lname) ) {
    $lnameErrMsg = "Only alphabets and whitespace are allowed.";
  }
  if (!preg_match ("/^[a-zA-z]*$/", $district) ) {
    $districtErrMsg = "Only alphabets and whitespace are allowed.";
  }
  if (!preg_match ("/^[a-zA-z]*$/", $city) ) {
    $cityErrMsg = "Only alphabets and whitespace are allowed.";
  }
  if (!preg_match ("/^[a-zA-z]*$/", $lname) ) {
    $stateErrMsg = "Only alphabets and whitespace are allowed.";
  }
  $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if (!preg_match ($pattern, $userEmail) ){
    $emailErrMsg = "Email is not valid.";
  }
  $mobilePattern="/^[1-9][0-9]{9}$/";
  if(!preg_match($mobilePattern,$userMobile)){
    $mobileErr="Enter a valid number";
  }
  $pinPattern="/^[1-9][0-9]{5}$/";
  if(!preg_match($pinPattern,$pin)){
    $pinErr="Enter a valid pin";
  }

if( strlen($password ) < 8 ) {
$passError .= "Password too short!
";
}
if( strlen($password ) > 20 ) {
$passError .= "Password too long!
";
}
  if( !preg_match("#[0-9]+#", $password ) ) {
  $passError .= "Password must include at least one number!
  ";
  }
  if( !preg_match("#[a-z]+#", $password ) ) {
  $passError .= "Password must include at least one letter!
  ";
  }
  if( !preg_match("#[A-Z]+#", $password ) ) {
  $passError .= "Password must include at least one CAPS!
  ";
  }
  if( !preg_match("#[\w]+#", $password ) ) {
  $passError .= "Password must include at least one symbol!
  ";
  }
  if(strcmp($password,$Cpassword)){
    $cpassErr="Password does not match";
  }
  //to check whether the user already exists
  $emailQuery="select * from userPersonalDetails where user_email='$userEmail'";
  $mobileQuery="select mobile_number from userPersonalDetails where mobile_number='$userMobile'";
  $checkEmailSql=mysqli_query($conn,$emailQuery);
  $checkMobileSql=mysqli_query($conn,$mobileQuery);
  if(mysqli_num_rows($checkEmailSql)>0||mysqli_num_rows($checkMobileSql)>0){
    $userExistsError="user already exists";
  }
  else{
   $sql="insert into userPersonalDetails(user_first_name,user_last_name,user_email,user_address,city,district,state,pin,mobile_number,password,insert_date) values ('$fname','$lname','$userEmail','$userAddress','$city','$district','$state','$pin','$userMobile','$password',now())";
    if(mysqli_query($conn,$sql)){
    $resultMsg="Registered successfully!";
  }

}
}
 ?>

<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="signup.css"/>
  <style>
  span{
    color: red;
  }
  .container-1{
    padding-top: 30px;
  }
  </style>
</head>
  <body>
<div class="container-1">
  <form  class="form-1" id="form-1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <span style="color:green"><?php echo $resultMsg; ?></span>
    <span style="color:red"><?php echo $userExistsError; ?></span>
    <label>First Name:</label><input type="text" name="firstName"></input>
        <span><?php echo $fnameErr; ?></span>
        <span><?php echo $errMsg; ?></span>
          <br>
    <label>Last Name:</label><input type="text" name="lastName"></input>
    <span><?php echo $lnameErrMsg; ?></span>
        <br>
    <label>Address</label><input name="address"></input>
    <span><?php echo $addressErr; ?></span>
        <br>
    <label>City:</label><input type="text" name="city"></input>
      <span><?php echo $cityErr; ?></span>
      <?php echo $cityErrMsg; ?>
            <br>
    <label>District:</label><input type="text" name="district"></input>
      <span><?php echo $districtErr; ?></span>
      <?php echo $districtErrMsg; ?>
        <br>
    <label>State:</label><input type="text" name="state"></input>
      <span><?php echo $stateErr; ?></span>
      <?php echo $stateErrMsg; ?>
        <br>
    <label>pin:</label><input type="number" name="pin"></input>
    <span><?php echo $pinErr; ?></span>
                <br>
    <label>Email:</label><input type="email" name="email"></input>
      <span><?php echo $emailEmptyErr; ?></span>
        <span><?php echo $emailErrMsg; ?></span>
          <br>
    <label>Contact:</label><input type="number" name="contact"></input>
        <span><?php echo $mobileErr; ?></span>
          <br>
    <label>Password:</label><input type="password" name="password"></input>
    <span><?php echo $passwordErr; ?></span>
    <span><?php echo $passError; ?></span>
        <br>
    <label>Confirm Password:</label><input type="password" name="confirmPassword"></input>
    <span><?php echo $cpassErr; ?></span>
        <br>
        <button type="submit" name="button-2"id="button-2">Sign up</button>
    </form>
  </div>
</body>
</html>
