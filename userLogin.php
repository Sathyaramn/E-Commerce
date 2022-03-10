<?php
session_start();
$user_id="";
$passwordErr="";
$emailErr="";
$result="";
$SuccessResult="";
$FailResult="";
$emailExistError="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $password=$_POST['password'];
  $email=$_POST['email'];
  $conn=mysqli_connect("localhost","root","root","Ecommerce");
  $sql="select * from userPersonalDetails where user_email='$email' and password='$password'";
  $execute_query=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($execute_query);
  if(mysqli_num_rows($execute_query)==1){
    $_SESSION['userId']=$row['user_id'];
    $_SESSION['fname']=$row['user_first_name'];
    $_SESSION['lname']=$row['user_last_name'];
    $_SESSION['address']=$row['user_address'];
    $_SESSION['email']=$row['user_email'];
    $_SESSION['city']=$row['city'];
    $_SESSION['district']=$row['district'];
    $_SESSION['state']=$row['state'];
    $_SESSION['pin']=$row['pin'];
    $_SESSION['mobile']=$row['mobile_number'];
      $SuccessResult="success";
      header("location:User/userMainIndex.php");
    }
  else{
      $FailResult="Invalid Login Credentials";
    }

}
?>

<!DOCTYPE HTML>
<head>
  <style>
  form{
    width:50%;
    height:50%;
     display: grid;
   grid-template-columns: 1fr;
    border:1px solid inherit;
    background-color: skyblue;
     gap:3px;
     padding: 30px;


  }
  .container{
       margin-left:380px;
       margin-right:100px;
       margin-top: 180px;
       margin-bottom: 100px;
  }
  </style>
</head>
<body>
  <div class="container">
  <form  class="grid" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

    <span> <?php echo $SuccessResult ?></span>
    <span> <?php echo $FailResult ?></span>
    <label> Email: </label><input type="email" name="email"></input>
      <span> <?php echo $emailErr; ?></span>
    <label> Password: </label><input type="password" name="password"></input>
    <span> <?php echo $passwordErr ?></span>
    <br>
    <button type="submit">Submit</button>
  </form>
</div>
</body>
