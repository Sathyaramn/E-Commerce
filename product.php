<!DOCTYPE HTML>
<head>
  <link rel="stylesheet" type="text/css" href="product.css"/>
  <style media="screen">
    form{
      padding:30px;
      background:pink;
      width:40%;
      height:60%;
      display: grid;
    grid-template-columns: 1fr;
      margin-left:350px;
      margin-right:100px;
      margin-top:5px;
      margin-bottom: 5px;
      padding-bottom: 28px;
      padding-top: 23px;
      padding-left: 28px;
      padding-right: 28px;
      border:1px solid inherit;
      background-color: silver;
    }
    .flex{
      display:grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-auto-rows: minmax(547px,auto);
        gap:30px;
        padding-top: 23px;
    }
  </style>
</head>
<body>
  <form action="product.php" method="post" enctype="multipart/form-data">
  <label>Image</label> <input type='file' name='choosefile'></input>
  <br>
  <label>Product name</label> <input type='text' name='prname' value=''></input>
  <br>
  <label>Product ID</label> <input type='number' name='pid' value=''></input>
  <br>
  <div><button type="submit" name="uploadfile">Submit</button></div>
  </form>
  <div class="flex">
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "root";
   $dbname="dem0";
         $db = new mysqli($servername,$username,$password,$dbname);
   if(isset($_POST['uploadfile'])) {
   $filename = $_FILES["choosefile"]["name"];
   $name=$_POST['prname'];
   $pid=$_POST['pid'];
   $tempname = $_FILES["choosefile"]["tmp_name"];

       $folder = "images/".$filename;

   // connect with the database

       // query to insert the submitted data

       $sql = "INSERT INTO image (img,name,pid) VALUES ('$filename','$name','$pid')";

       // function to execute above query

       mysqli_query($db, $sql);

       // Add the image to the "image" folder"

       if (move_uploaded_file($tempname, $folder)) {

           $msg="Image uploaded successfully";

       }else{

           $msg="Failed to upload image";

   }

}


$sql="SELECT * from image";
$result=$db->query($sql);
if(! $db ) {
 die('Could not connect: ' . mysql_error());
}
else if($result->num_rows >0){
  while($row=$result->fetch_assoc()){
    echo "<div><img src='images/".$row['img']."' style{width:100px height=200px}>";
    echo "<br>".$row['name']."<br>".$row['pid']."</div>";
  }
}
else{
   echo "No data";
}
   // Create connection


   ?>
   </div>

  </body>
