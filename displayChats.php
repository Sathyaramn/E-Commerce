
<?php
session_start();
$id=$_SESSION['adminId'];
$conn=mysqli_connect("localhost","root","root","Ecommerce");
?>
<!DOCTYPE html>
<head>
  <style>
  .container{
    margin: 30px;
  }
  .grid{
    display:grid;
    grid-template-columns: 1fr;
    gap:4px;
    margin: 30px;
  }
  .box{
    background-color: pink;
    padding: 15px;
    margin-bottom:10px;
  }
  </style>
</head>
<body>
  <div class="container">
 <div class="grid">
   <div>
     <?php
     $sql="select user_id from userpersonaldetails where exists(select user_id from chat where chat.user_id=userpersonaldetails.user_id)";
     $esql=mysqli_query($conn,$sql);
     if(mysqli_num_rows($esql)>0){
       while($row=mysqli_fetch_assoc($esql)){
         $userid=$row['user_id'];
         $name="select * from userPersonalDetails where user_id=$userid";
         $sname=mysqli_query($conn,$name);
         $ena=mysqli_fetch_assoc($sname);
         echo "<div class='box'><div>Message from ".$ena['user_first_name']." ".$ena['user_last_name']."</div>
         <div><a href='adminchat.php?userId=".$userid."&adminId=".$id."'><button>Go to  Chat</button></a></div></div>";

       }
     }
      ?>
   </div>
 </div>
  </div>
</body>
