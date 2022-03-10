<?php include 'loginCheck.php'; ?>
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
