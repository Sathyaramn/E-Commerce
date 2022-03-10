<?php
session_start();
$conn=$conn=mysqli_connect("localhost","root","root","Ecommerce");
$id=$_SESSION['adminId'];
$brandNameErr="";
$productNameErr="";
$materialErr="";
$mrpErr="";
$priceErr="";
$discountErr="";
$result=$Errresult="";
$image1Err=$image2Err=$image3Err=$image4Err="";
$image1ExistErr=$image1SizeErr=$image1ExtensionErr="";
$image2ExistErr=$image2SizeErr=$image2ExtensionErr="";
$image3ExistErr=$image3SizeErr=$image3ExtensionErr="";
$image4ExistErr=$image4SizeErr=$image4ExtensionErr="";
$brandName='';
$productName='';
$image1Name='';
$image2Name='';
$image3Name='';
$image4Name='';
$mrp='';
$price='';
$discount='';
$material='';
if($_SERVER["REQUEST_METHOD"]=="POST"){
$brandName=$_POST['brandName'];
$productName=$_POST['productName'];
$image1Name=$_FILES["image1"]["name"];
$image2Name=$_FILES["image2"]["name"];
$image3Name=$_FILES["image3"]["name"];
$image4Name=$_FILES["image4"]["name"];
$material=$_POST["material"];
$mrp=$_POST["mrp"];
$price=$_POST["price"];
$discount=$_POST["discount"];
$stockStatus=$_POST['stockStatus'];
$additionalInfo=$_POST['additionalInfo'];
$type=$_POST['clothType'];
$allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "jfif"
    );
// Get image file extension
$file1_extension = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
$file2_extension = pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION);
$file3_extension = pathinfo($_FILES["image3"]["name"], PATHINFO_EXTENSION);
$file4_extension = pathinfo($_FILES["image4"]["name"], PATHINFO_EXTENSION);
  $target1 = "../womenFashionImages/".$_FILES["image1"]["name"];
  $target2 = "../womenFashionImages/".$_FILES["image2"]["name"];
if(empty($brandName)){
  $brandNameErr="Brand Name can't be empty";
}
if(empty($productName)){
  $productNameErr="Product Name can't be empty";
}
if(empty($material)){
  $materialErr="Material can't be empty";
}
if(empty($mrp)){
  $mrpErr="M.R.P can't be empty";
}
if(empty($price)){
  $priceErr="Price can't be empty";
}
if(empty($discount)){
  $discountErr="Discount can't be empty. If there is no discount put 0!";
}
// Validate file input to check if is not empty

if (!file_exists($_FILES["image1"]["tmp_name"]))
{
         $image1ExistErr="Image 1 can't be empty";
    }
if (file_exists($_FILES["image1"]["tmp_name"]))
{
    // Validate file input to check if is with valid extension
if (! in_array($file1_extension, $allowed_image_extension))
{
        $image1ExtensionErr="Upload valid images. Only PNG,JPG and JPEG are allowed.";

  }    // Validate image file size
else if (($_FILES["image1"]["size"] > 5000000))
{
            $image1SizeErr="Image size exceeds 5MB";
}
  else
  {
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target1);
                 $image1Err="true";
  }
}
    //image 2
    // Validate file input to check if is not empty
if (! file_exists($_FILES["image2"]["tmp_name"]))
{
         $image2ExistErr="Image 2 can't be empty";
}
// Validate file input to check if is with valid extension
if(file_exists($_FILES["image2"]["tmp_name"]))
{
 if (! in_array($file2_extension, $allowed_image_extension))
 {
        $image2ExtensionErr="Upload valid images. Only PNG,JPG and JPEG are allowed.";

    }    // Validate image file size
 else if (($_FILES["image2"]["size"] > 5000000))
 {
            $image2SizeErr="Image size exceeds 5MB";

    }
 else
 {
     move_uploaded_file($_FILES["image2"]["tmp_name"], $target2);
              $image2Err="true";
            }
  }
    /*else if ($width > "300" || $height > "200") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } */

      //to rename file name


    //to rename file name
    /*$temp2=explode(".",$_FILES["image2"]["name"]);
    $newFileName2=$temp2[0].rand(0,30000).".".$temp2[1];*/
    //$temp[0]=$temp[0].rand(0,30000);
    //$newFileName;

    if (! file_exists($_FILES["image3"]["tmp_name"]))
    {
             $image3ExistErr="Image 3 can't be empty";
    }
    // Validate file input to check if is with valid extension
    if(file_exists($_FILES["image3"]["tmp_name"]))
    {
     if (! in_array($file3_extension, $allowed_image_extension))
     {
            $image3ExtensionErr="Upload valid images. Only PNG,JPG and JPEG are allowed.";

        }    // Validate image file size
     else if (($_FILES["image3"]["size"] > 5000000))
     {
                $image3SizeErr="Image size exceeds 5MB";

        }
     else
     {
         move_uploaded_file($_FILES["image3"]["tmp_name"], $target2);
                  $image3Err="true";
                }
      }

      if (! file_exists($_FILES["image4"]["tmp_name"]))
      {
               $image4ExistErr="Image 4 can't be empty";
      }
      // Validate file input to check if is with valid extension
      if(file_exists($_FILES["image4"]["tmp_name"]))
      {
       if (! in_array($file4_extension, $allowed_image_extension))
       {
              $image4ExtensionErr="Upload valid images. Only PNG,JPG and JPEG are allowed.";

          }    // Validate image file size
       else if (($_FILES["image4"]["size"] > 5000000))
       {
                  $image4SizeErr="Image size exceeds 5MB";

          }
       else
       {
           move_uploaded_file($_FILES["image4"]["tmp_name"], $target2);
                    $image4Err="true";
                  }
        }
   if($image1Err=="true"&&$image2Err=="true"&&$image3Err=="true"&&$image4Err=="true"){
    $sql="insert into womenFashion(admin_id,brandName,mrp,price,discount,stockStatus,type,additionalInfo,productName,image1,image2,image3,image4,p_upload_date) values ('$id','$brandName','$mrp','$price','$discount','$stockStatus','$type','$additionalInfo','$productName','$image1Name','$image2Name','$image3Name','$image4Name',now())";
    $executequery=mysqli_query($conn,$sql);
    $last_id = mysqli_insert_id($conn);
    $stocksql="insert into womenFashionStock(product_id,sizeM,sizeL,sizeS,sizeXS,sizeXL,sizeXXL,sizeXXXL,stockStatus) values('$last_id','0','0','0','0','0','0','0','$stockStatus')";
    $stockquery=mysqli_query($conn,$stocksql);
  if($stockquery){
    $result="Product uploaded";
  }
  else{
    $Errresult="Error!";
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
span{
  color:red;
}
</style>
</head>
<body>
<div class="fashion" id="fashionid">
  <form class="womenndFashion" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <h3>Women & Fashion</h3>
       <span style="color:green"><?php echo $result; ?></span>
       <span style="color:red"><?php echo $Errresult; ?></span>
    <p><label>Brand name:</label><input type="text" name="brandName" value="<?php echo $brandName;?>"></input></p>
    <span><?php echo $brandNameErr; ?></span>
    <p><label>Product name:</label><input type="text" name="productName" value="<?php echo $productName;?>"></input></p>
    <span><?php echo $productNameErr; ?></span>
     <p><label>Image 1:</label><input type="file" name="image1" ></input></p>
      <span><?php echo $image1ExistErr; ?></span>
       <span><?php echo $image1ExtensionErr; ?></span>
        <span><?php echo $image1SizeErr; ?></span>
     <p><label>Image 2:</label><input type="file" name="image2" ></input></p>
      <span><?php echo $image2ExistErr; ?></span>
       <span><?php echo $image2ExtensionErr; ?></span>
        <span><?php echo $image1SizeErr; ?></span>
     <p><label>Image 3:</label><input type="file" name="image3"></input></p>
     <span><?php echo $image3ExistErr; ?></span>
      <span><?php echo $image3ExtensionErr; ?></span>
       <span><?php echo $image3SizeErr; ?></span>
     <p><label>Image 4:</label><input type="file" name="image4" ></input></p>
     <span><?php echo $image4ExistErr; ?></span>
      <span><?php echo $image4ExtensionErr; ?></span>
       <span><?php echo $image4SizeErr; ?></span>
     <p><label>Material:</label><input type="text" name="material" value="<?php echo $material;?>"></input></p>
     <span><?php echo $materialErr ?></span>
     <p><label>M.R.P:</label><input type="number" name="mrp" value="<?php echo $mrp;?>"></input></p>
     <span><?php echo $mrpErr ?></span>
     <p><label>Price:</label><input type="number" name="price" value="<?php echo $price;?>"></input></p>
     <span><?php echo $priceErr ?></span>
     <p><label>Discount:</label><input type="number" name="discount" value="<?php echo $discount;?>"></input></p>
       <span><?php echo $discountErr ?></span>
     <p><label>Stock Status</label> <select name="stockStatus" id="cars">
   <option value="In stock">In stock</option>
   <option value="Out of Stock">Out of Stock</option>
 </select></p>
     <p><label>Type:</label> <select name="clothType" id="cars">
   <option value="Kurthis">Kurthis</option>
   <option value="Tops">Tops</option>
   <option value="T-shirt">T-shirt</option>
   <option value="Anarkalis">Anarkalis</option>
 </select></p>
 <p><label>Addition Information</label><textarea type="text" cols="38" rows="4" name="additionalInfo" value="<?php echo $brandName;?>"></textarea></p>
 <button type="submit">Upload</button>
  </form>
</div>
</body>
