<!DOCTYPE HTML>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

      <div class="flex-1" id="myflex-1">
        <a href=" "><div>Home <span class="glyphicon glyphicon-home"></span></div></a>
        <a href=" "> <div>About Us</div></a>
        <a href=" "><div>Review</div></a>
        <a href=" "><div>Contact Us</div></a>
        <a href="signup.php"><div>Sign up</div></a>


        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
   <i class="fa fa-bars"></i>
 </a>
        </div>
</div>

        <div class="grid-1">
          <div class="grid-1.1">
          <h1> Manage all your business</h1>
            <br>
          <br>
          <p><span class="glyphicon glyphicon-check"></span>100% free</p>
      <p><span class="glyphicon glyphicon-check"></span>Easy to use</p>
          <p><span class="glyphicon glyphicon-check"></span>Simplify business</p>
           <br>
            <a href="login.php" style="color:inherit"><button type="submit">Login as merchant</button></a>
            </div>

       <div class="grid-1.2">
         <h1>Shop from home</h1>
         <br>
         <br>
         <p><span class="glyphicon glyphicon-check"></span>Share shopping list to merchant</p>
         <p><span class="glyphicon glyphicon-check"></span>Free delivery</p>
          <p><span class="glyphicon glyphicon-check"></span>No more waiting at shops</p>
           <br>
         <a href="userLogin.php" style="color:inherit" ><button type="submit">Login as customer</button></a>
         </div>

          </div>
      </div>
      <script>
function myFunction() {
  var x = document.getElementById("myflex-1");
  if (x.className === "flex-1") {
    x.className += " responsive";
  } else {
    x.className = "flex-1";
  }
}
</script>
    </body>
