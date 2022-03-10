<?php session_start();
$userid=$_SESSION['userId'];
$adminid=$_GET['adminid'];
echo $adminid;
echo $userid;
  $conn=mysqli_connect("localhost","root","root","Ecommerce");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST['submitmsg'])){
   $usermsg=$_POST['usermsg'];
    $adminmsg="";
    echo "<div>$usermsg</div>";
    $sql="insert into chat(user_id,admin_id,user_msg)values($userid,$adminid,'$usermsg')";
    $esql=mysqli_query($conn,$sql);
    if($esql){
      echo "<div>done</div>";
    }

  }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <title>Tuts+ Chat Application</title>
        <meta name="description" content="Tuts+ Chat Application" />
        <link rel="stylesheet" href="style.css" />
        <style>
        {
    margin: 0;
    padding: 0;
  }

  body {
    margin: 20px auto;
    font-family: "Lato";
    font-weight: 300;
  }

  form {
    padding: 15px 25px;
    display: flex;
    gap: 10px;
    justify-content: center;
  }

  form label {
    font-size: 1.5rem;
    font-weight: bold;
  }

  input {
    font-family: "Lato";
  }

  a {
    color: #0000ff;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }
  .umsg{
  text-align: right;
  }
  .amsg{
    text-align: left;
  }

  #wrapper,
  #loginform {
    margin: 0 auto;
    padding-bottom: 25px;
    background: #eee;
    width: 600px;
    max-width: 100%;
    border: 2px solid #212121;
    border-radius: 4px;
  }

  #loginform {
    padding-top: 18px;
    text-align: center;
  }

  #loginform p {
    padding: 15px 25px;
    font-size: 1.4rem;
    font-weight: bold;
  }

  #chatbox {
    text-align: left;
    margin: 0 auto;
    margin-bottom: 25px;
    padding: 10px;
    background: #fff;
    height: 300px;
    width: 530px;
    border: 1px solid #a7a7a7;
    overflow: auto;
    border-radius: 4px;
    border-bottom: 4px solid #a7a7a7;
  }

  #usermsg {
    flex: 1;
    border-radius: 4px;
    border: 1px solid #ff9800;
  }

  #name {
    border-radius: 4px;
    border: 1px solid #ff9800;
    padding: 2px 8px;
  }

  #submitmsg,
  #enter{
    background: #ff9800;
    border: 2px solid #e65100;
    color: white;
    padding: 4px 10px;
    font-weight: bold;
    border-radius: 4px;
  }

  .error {
    color: #ff0000;
  }

  #menu {
    padding: 15px 25px;
    display: flex;
  }

  #menu p.welcome {
    flex: 1;
  }

  a#exit {
    color: white;
    background: #c62828;
    padding: 4px 8px;
    border-radius: 4px;
    font-weight: bold;
  }

  .msgln {
    margin: 0 0 5px 0;
  }

  .msgln span.left-info {
    color: orangered;
  }

  .msgln span.chat-time {
    color: #666;
    font-size: 60%;
    vertical-align: super;
  }

  .msgln b.user-name, .msgln b.user-name-left {
    font-weight: bold;
    background: #546e7a;
    color: white;
    padding: 2px 4px;
    font-size: 90%;
    border-radius: 4px;
    margin: 0 5px 0 0;
  }

  .msgln b.user-name-left {
    background: orangered;
  }

        </style>
    </head>
    <body>
        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b></b></p>
                <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            </div>

            <div id="chatbox">
            <?php
  $ret="select * from chat where user_id='$userid' and admin_id='$adminid'";
  $eret=mysqli_query($conn,$ret);
  if(mysqli_num_rows($eret)>0){
    while($row=mysqli_fetch_assoc($eret)){
      $usermsg=$row['user_msg'];
      $adminmsg=$row['admin_msg'];

      echo "<div class='umsg'>".$row['user_msg']."</div>";


    echo "<div class='amsg'>".$row['admin_msg']."</div>";

    }
  }
            ?>
            </div>

            <form name="message" action="" method="post">
                <input name="usermsg" type="text" id="usermsg"/>
                <button name="submitmsg" type="submit" id="submitmsg"  >send</button>
            </form>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {});
        </script>
        <script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'userMainIndex.php?logout=true';}
	});
});
</script>
    </body>
</html>
