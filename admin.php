<!DOCTYPE HTML>
<head>
  <link rel="stylesheet" type="text/css" href="adminstyle.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-1">
    <div class="grid-1">
    <div class="flex-1" class="grid-1.1">
      <div></div>
      <div>Username</div>
      <div>Home</div>
      <div>Profile</div>
      <div>Dashboard</div>
      <div>Logout</div>
      </div>

     <div class="grid-1.2">
      <div class="sub-grid" id="igrid-1.2">
      <div class="amount-whole">
        <div class="amount-box">1</div>
        <div class="amount-box">2</div>
        <div class="amount-box">3</div>
        <div class="amount-box">4</div>
      </div>

      <div class="add-customer">
        <div id="event">
          <a href="#"><p><span class="glyphicon glyphicon-plus-sign"></span>
          Add Customer</p></a>
        </div>
        </div>

      <div class="table">
        <table style="width:100%" id="tablee">
          <thead>
        <tr>
        <th>Customer Name</th>
        <th>Date</th>
        <th>Amount</th>
        <th>other details</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname="dem0";
          // Create connection
          $conn = new mysqli($servername,$username,$password,$dbname);
          $sql="SELECT * FROM data";
          $result=$conn->query($sql);
          // Check connection
          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
          if($result->num_rows >0){
            while($row=$result->fetch_assoc()){
              echo "<tr><td>".$row["name"]."</td><td>".$row["date"]."</td><td>".$row["email"]."</td></tr>";
            }
          }
          else{
             echo "No data";
          }
          $conn->close();
          ?>
        </tbody>
        </table>
</div>
</div>



<div class="customer-form" id="icustomer-form">
  <div>
<h3 style="text-align:center">Add Customer</h3>
 <form>
 <label for="fname">Customer Name:</label>
 <input type="text" id="fname"/>
 <br>
 <label for="fmobile">Phone Number:</label>
 <input type="number" id="fmobile"/>
 <br>
 <label form="femail">Email:</label>
 <input type="email" id="femail"/>
 <br>
 <label for="fdate">Date:</label>
 <input type="date" id="fdate"/>
 <br>
 <label id="famount">Amount Pending:</label>
 <input type="number"/>
 <br>
 <label for="due">Due Date</label>
 <input type="date" id="due"/>
 <br>
     <button class="butt" id="submit" type="button" onclick="update()">Submit</button>
 </form>
 </div>
</div>


          </div>
          </div>





          </div>


          <script>
            var x=document.getElementById('igrid-1.2');
            var y=document.getElementById('icustomer-form');
            console.log(document.getElementById('event'));
            document.getElementById('event').onclick=function(){
           if(x.className==="sub-grid"){
            console.log(x.className+=" hide");
             console.log(y.className+=" display");
          }
          else{
            x.className="sub-grid";
          }

       //console.log(document.getElementById('igrid-1.2'));
      }

      function update(){
         let name = document.getElementById('fname').value;
         let date = document.getElementById('fdate').value;
         let amount = document.getElementById('famount').value;
         var table=document.getElementById('tablee');
         var row=table.insertRow(1);
         var td1=row.insertCell(0);
         var td2=row.insertCell(1);
         var td3=row.insertCell(2);
         td1.innerHTML=name;
         td2.innerHTML=date;
         td3.innerHTML=amount;
     }



            </script>
    </body>
