<!DOCTYPE HTML>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="form-1" id="form-1">
<form id="personalForm" method="post" action="adminDetailsUpdate.php">
  <h3>Personal Information</h3>
<p>  <label>Admin Id:</label><input class="admin" type="text" name="adminId"  disabled></input></p>
  <br>
    <p> <label>First Name:</label><input class="admin" type="text" name="firstName"  disabled></input></p>
      <br>
    <p> <label>Last Name:</label><input class="admin" type="text" name="LastName" disabled></input></p>
      <br>
    <p> <label>Store Name:</label><input class="admin" type="text" name="storeName"  disabled></input></p>
      <br>
    <p> <label>Address</label><input class="admin" type="text" name="address"  disabled></input></p>
      <br>
      <p> <label>City:</label><input class="admin" type="text" name="city" disabled></input></p>
        <br>
    <p> <label>District:</label><input class="admin" type="text" name="district"  disabled></input></p>
      <br>
    <p> <label>State:</label><input class="admin" type="text" name="state"  disabled></input></p>
      <br>
    <p> <label>Email:</label><input class="admin" type="email" name="email"  disabled></input></p>
  <span> <?php echo $emailError; ?></span>
      <br>
    <p> <label>Contact:</label><input class="admin" type="number" name="contact" disabled></input></p>
    <span> <?php echo $mobileError; ?></span>
      <br>

      <button  id="edit" class="edit">Edit</button>  <button type="submit" id="update" name="update" class="update">Update</button>
</form>
</div>
</body>
