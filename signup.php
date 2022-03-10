<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["firstName"])){

    echo '<script type ="text/JavaScript">';
echo 'alert("Name is required")';
echo '</script>';
  //alert($fnameErr);
  }
  else{
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

  }
}
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="signup.css"/>



  </head>
  <body>
    <div class="container">
     <img src="signup.png" class="img"/>
    <button class="button-1" id="merchant" onclick="redirect()">Sign up as Merchant</button>
    <button class="button-1" id="customer" onclick="userredirect()">Sign up as Customer</button>
    </div>


<div>

  </div>


    <script>
       x=document.getElementById("merchant");
        y=document.getElementById("customer");
        z=document.getElementById('form-2');
        a=document.getElementById('form-1');
        console.log(a);
    /*  document.getElementById('merchant').onclick=function(){

         x.className=" hideButton";
         y.className=" hideButton";
        a.className="viewThings";
        console.log(a);

      }*/

      /* document.getElementById('customer').onclick=function(){
          x.className="hideButton";
          y.className="hideButton";
         z.className="viewThings";
         console.log(z);
       }*/
        function redirect(){
          location.href='signupdemo.php';
        }
        function userredirect(){
          location.href='userSignUp.php';
        }

        //form validating
        /*var fname=document.getElementById('firstName');
        var lname=document.getElementById('lastName');
        var storeName=document.getElementById('storeName');
        var adminEmail=document.getElementById('email');
        var adminAddress=document.getElementById('address');
        var city=document.getElementById('city');
        var state=document.getElementById('state');
        var district=document.getElementById('district');
        var pin=document.getElementById('pin');
        var adminMobile=document.getElementById('contact');
        var password=document.getElementById('password');
        var Cpassword=document.getElementById('confirmPassword');*/

      </script>
    </body>
    </html>
