
<!DOCTYPE HTML>
<head>
<link rel="stylesheet" type="text/css" href="admin.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.box-1{
  margin-left:10px;
  margin-right:10px;
  background-color:lightblue;
}
.grid-1{
  display:grid;
  grid-template-columns:1fr 5fr;
}
.grid-1.1{
  grid-row:1;
  grid-column:1;
}
.grid-1.2{
  grid-row:1;
  grid-column:2;
}
.flex-1-1{
display:flex;
flex-direction:column;
background-color:violet;
row-gap:25px;

/*scroll bar*/
height:580px;
width: 200px;
overflow-y: scroll;
}
.flex-1-1 div{

  padding:7.5px;
}
.flex-1-1 div:hover{
  background-color:lightblue;
  cursor:pointer;
}

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

/*form-1 hiding css*/
.form-1{
  display:none;
}
/*for displaying form-1 */
.displayform{
  display: block;
}
.div-color{
  background-color: pink;
}
/*Category form design*/
.category-form input{
  width: 14px;
  height: 14px;
}
/*Displaying category list*/
.category-list{
  padding: 0px;
  display:none;
}
/* To display category list when the checkbox is checked*/
.display-category{
  display: block;
}

/*Category form hiding*/
.Category{
    display: none;
}
/*Women and fashion styles*/
.womenndFashion p {
    border-spacing:0px 12px;
}
.fashion{
  display:none;
}
.display-fashion{
  display:none;
}
/*stock side bar*/
.stocks-list{
  display:none;
}
.display-stocks{
  display: block;
}
.stock-table{
  border-collapse: collapse;
}
.stock-table td, .stock-table th {
  border: 1px solid #ddd;
  padding: 8px;
}
.stock-table tr:nth-child(even){background-color: #f2f2f2;}

.stock-table  tr:hover {background-color: #ddd;}

.stock-table  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.stock-fashion-div{
  display:none;
}
.display-stock-fashion-div{
  display:block;
}
/*Track order table styles*/
.track-order-table{
  border-collapse: collapse;
}
.track-order-table td, .track-order-table th {
  border: 1px solid #ddd;
  padding: 8px;
}
.track-order-table tr:nth-child(even){background-color: #f2f2f2;}

.track-order-table  tr:hover {background-color: #ddd;}

.track-order-table  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.track-order{
  display:none;
}
.display-track-order{
  display: block;
}
/*track List table style*/
.track-list-table{
  border-collapse: collapse;
}
.track-list-table td, .track-order-table th {
  border: 1px solid #ddd;
  padding: 8px;
}
.track-list-table tr:nth-child(even){background-color: #f2f2f2;}

.track-list-table  tr:hover {background-color: #ddd;}

.track-list-table  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.track-list{
  display:none;
}
.display-track-list{
  display: block;
}

/*Track income styles*/
.income-list{
  display:none;
}
.display-income-list{
  display:block;
}
.monthly-income-table, .yearly-income-table, .daily-income-table{
  border-collapse: collapse;
}
.monthly-income-table td, .monthly-income-table th, .yearly-income-table td, .yearly-income-table th, .daily-income-table td, .daily-income-table th {
  border: 1px solid #ddd;
  padding: 8px;
}
.monthly-income-table tr:nth-child(even){background-color: #f2f2f2;}
.yearly-income-table tr:nth-child(even){background-color: #f2f2f2;}
.daily-income-table tr:nth-child(even){background-color: #f2f2f2;}
.monthly-income-table tr:hover {background-color: #ddd;}
.daily-income-table tr:hover {background-color: #ddd;}
.yearly-income-table tr:hover {background-color: #ddd;}

.monthly-income-table th,.daily-income-table th, .yearly-income-table th  {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.track-daily-income{
  display:none;
}
.track-monthly-income{
  display:none;
}
.track-yearly-income{
  display:none;
}
.display-track-income{
  display:block;
}

/*Customer feedback table style*/
.customer-feedback-table{
  border-collapse: collapse;
}
.customer-feedback-table td, .customer-feedback-table th {
  border: 1px solid #ddd;
  padding: 8px;
}
.customer-feedback-table tr:nth-child(even){background-color: #f2f2f2;}

.customer-feedback-table tr:hover {background-color: #ddd;}

.customer-feedback-table  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.customer-feedback{
  display:none;
}
.display-customer-feedback{
  display:block;
}
.Chat{
  display:none;
}
.display-Chat{
  display:block;
}

</style>
</head>
<body>
  <div class="box-1">
    <div class="grid-1">
      <div class="grid-1.1">
<div class="flex-1">
          <div class="flex-1-1">
          <div id="profile">Profile</div>
            <div id=category>Category</div>
          <div id="products">Products</div>
          <div class="category-list" id="0">Mobiles & Accessories</div>
          <div class="category-list" id="0">Electronics & Accessories</div>
          <div class="category-list" id="WomenFashion">Women & fashion</div>
          <div class="category-list" id="0">TVs & Appliances</div>
          <div class="category-list" id="0">Computer & Accessories</div>
          <div class="category-list" id="0">Men's Fashion</div>
          <div class="category-list" id="0">Kid's Fashion</div>
          <div class="category-list" id="0">Furniture</div>
          <div class="category-list" id="0">Home & Kitchen</div>
          <div class="category-list" id="0">Grocery & Gourmet</div>
          <div class="category-list" id="0">Beauty & Luxury beauty</div>
          <div class="category-list" id="0">Heath & Household</div>
          <div class="category-list" id="0">Sports & fitness</div>
          <div class="category-list" id="0">Bags,Wallets & Luggage</div>
          <div class="category-list" id="0">Toys & Games</div>
          <div class="category-list" id="0">Baby products</div>
          <div class="category-list" id="0">Pet Supplies</div>
          <div class="category-list" id="0">Car, Motor Bike</div>
          <div class="category-list" id="0">Books & Ebooks</div>
          <div class="category-list" id="0">Handloom & Handicrafts</div>

          <div id="stocks">Manage stocks</div>
            <div class="stocks-list" id="stock-fashion">Women & Fashion</div>
          <div id="orders">Track Order</div>
          <div id="income">Track Income</div>
              <div class="income-list">Daily Income</div>
              <div class="income-list">Monthly Income</div>
              <div class="income-list">Yearly Income</div>
          <div id="transactions">Transactions</div>
          <div id="feedback">Customer Feedback</div>
          <div id="chat">Chat</div>
          <div id="logout"><a href="logout.php">Logout</a></div>
          </div>
 </div>
        </div>

        <div class="grid-1.2">
          <div class="form-1" id="form-1">
        <iframe src="Admin/personalDetails.php" name="iframe_a" border=none height="600px" width="100%" title="Iframe Example"></iframe>
        </div>
  <div>
  </div>
 <div class="Category" id="Category">
   <h3>Category List</h3>
   <form class="category-form">
     <input type="checkbox" name="mobiles" value="1" id="mobiles">Mobiles & Accessories<br>
     <input type="checkbox" name="electronic" value="2">Electronics & Accessories<br>
     <input type="checkbox" name="women" value="3" id="electronic">Women & fashion<br>
     <input type="checkbox" name="tv" value="4" id="tv">TVs & Appliances<br>
     <input type="checkbox" name="computer" value="5" id="computer">Computer & Accessories<br>
     <input type="checkbox" name="men" value="6" id="men">Men's Fashion<br>
     <input type="checkbox" name="kid" value="7" id="kid">Kid's Fashion<br>
     <input type="checkbox" name="home" value="8" id="home">Home & Kitchen<br>
     <input type="checkbox" name="furniture" value="9" id="furniture">Furniture<br>
     <input type="checkbox" name="grocery" value="10" id="grocery">Grocery & Gourmet<br>
     <input type="checkbox" name="beauty" value="11" id="beauty">Beauty & Luxury beauty<br>
     <input type="checkbox" name="health" value="12" id="health">Heath & Household<br>
     <input type="checkbox" name="sports" value="13" id="sports">Sports & fitness<br>
     <input type="checkbox" name="bags" value="14" id="bags">Bags,Wallets & Luggage<br>
     <input type="checkbox" name="toys" value="15" id="toys">Toys & Games<br>
     <input type="checkbox" name="baby" value="16" id="baby">Baby products<br>
     <input type="checkbox" name="pet" value="17" id="pet">Pet Supplies<br>
     <input type="checkbox" name="car" value="18" id="car">Car, Motor Bike<br>
     <input type="checkbox" name="books" value="19" id="books">Books & Ebooks<br>
     <input type="checkbox" name="handloom" value="20" id="handloom">Handloom & Handicrafts<br>

   </form>
 </div>

 <div class="fashion" id="fashionid">

  <iframe src="Admin/womenFashion.php" name="womenFashion" border=none height="600px" width="100%" title="Iframe Example"></iframe>

 </div>

 <div class="stock-fashion-div" id="stock-fashion-div">
<iframe src="Admin/womenFashionStock.php" name="womenFashionStock" border="none" height="600px" width="100%" title="Iframe Example"></iframe>
 </div>

 <div class="track-order" id="track-order">
   <iframe src="Admin/trackorder.php" name="womenFashionStock" border="none" height="600px" width="100%" title="Iframe Example"></iframe>
 </div>

 <div class="Chat" id="Chat">

  <iframe src="Admin/displayChats.php" name="womenFashion" border=none height="600px" width="100%" title="Iframe Example"></iframe>

 </div>

 <div class="track-list" id="track-list">
   <table style="width:100%" class="track-list-table" id="track-list-table">
     <thead>
       <tr>
         <th>Order Id</th>
         <th>Name</th>
         <th>phone Number</th>
         <th>Email</th>
         <th>List</th>
         <th>Delivery Address</th>
         <th>Delivery type</th>
         <th>Payment status</th>
         <th>Bill</th>
         <th>More details</th>

       </tr>
     </thead>
     <tbody>
       <tr>
        <td>3455</td>
        <td>Sathya</td>
        <td>Kulasekharam</td>
        <td><select><option>Direct Delivery</option><option>Home Delivery</option></select></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
     </tbody>
   </table>
 </div>


<div class="track-daily-income" id="track-daily-income">
  <table class="daily-income-table" style="width:100%">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Date</th>
        <th>Total Orders</th>
        <th>Daily Income</th>
      </tr>
    </thead>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tbody>
    </tbody>
  </table>
</div>

    <div class="track-monthly-income" id="track-monthly-income">
      <table class="monthly-income-table" style="width:100%">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Date</th>
            <th>Total Orders</th>
            <th>Monthly Income</th>
          </tr>
        </thead>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tbody>
        </tbody>
      </table>
    </div>

        <div class="track-yearly-income" id="track-yearly-income">
          <table style="width:100%" class="yearly-income-table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Date</th>
                <th>Total Orders</th>
                <th>Yearly Income</th>
              </tr>
            </thead>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tbody>
            </tbody>
          </table>
        </div>

        <div class="customer-feedback" id="customer-feedback">
            <iframe src="Admin/feedback.php" name="womenFashion" border=none height="600px" width="100%" title="Iframe Example"></iframe>

        </div>

          </div>
      </div>
    </div>
    <script>
    var chat=document.getElementById("chat");
    chat.onclick=function(){
      if(document.getElementById("Chat").className==="Chat"){
        document.getElementById("Chat").className="display-Chat";
        console.log(chat.className);
      }
    }

    var form = document.getElementById("personalForm");
    /*side bar*/
    var profile=document.getElementById('profile');
    var category=document.getElementById('category');
    var sfashion=document.getElementById('WomenFashion');

    /*form*/
    var proform=document.getElementById('form-1');
    var cat=document.getElementById('Category');
    var fashion=document.getElementById('fashionid');

    var stock=document.getElementById('stocks');
    var Sstock=document.getElementsByClassName('stocks-list');
    var fstock=document.getElementById('stock-fashion-div');
    var SstockFashion=document.getElementById('stock-fashion');

    var order=document.getElementById('orders');
    var forder=document.getElementById('track-order');

    var lists=document.getElementById('list');
    var flist=document.getElementById('track-list');

    var Sincome=document.getElementById('income');
    var SincomeList=document.getElementsByClassName('income-list');

    var dailyIncome=document.getElementById('track-daily-income');
    var monthlyIncome=document.getElementById('track-monthly-income');
    var yearlyIncome=document.getElementById('track-yearly-income');
function display(){

}
    /*script for displaying profile*/
    profile.onclick=function(){
      if(fashion.className==="fashiondisplay-fashion"){
        fashion.className="fashion";
         sfashion.className="category-list display-category";
      }
      if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
        fstock.className="stock-fashion-div";
        SstockFashion.className="stocks-list";
      }
      //console.log(cat.className);
      if(cat.className=="Categorydisplay-category"){
                  //console.log(cat.className);
                cat.className="Category";
                category.className=null;
              }
    if(forder.className==="track-order display-track-order"){
               forder.className="track-order";
               order.className=null;
             }
    if(flist.className==="track-list display-track-list"){
               flist.className="track-list";
               lists.className=null;
             }
    if(dailyIncome.className==="track-daily-income display-track-income"){
              dailyIncome.className="track-daily-income";
                SincomeList[0].className="income-list display-income-list";
                Sincome.className="div-color";
            }
    if(monthlyIncome.className==="track-monthly-income display-track-income"){
              monthlyIncome.className="track-monthly-income";
                SincomeList[1].className="income-list display-income-list";
                Sincome.className="div-color";
      }
    if(yearlyIncome.className==="track-yearly-income display-track-income"){
        yearlyIncome.className="track-yearly-income";
          SincomeList[2].className="income-list display-income-list";
          Sincome.className="div-color";
      }
if(Ffeedback.className==="customer-feedback display-customer-feedback"){
        Ffeedback.className="customer-feedback";
        Sfeedback.className=null;
      }
if(proform.className==="form-1"){
      proform.className+=" displayform";
      //console.log(x.className);
      profile.className="div-color";
}
else if(proform.className==="form-1 displayform"){
  proform.className="form-1";
  profile.className=null;
}
}
/*To stop the page from refreashing while clicking edit or update buttons*/
//var form = document.getElementById("personalForm");
/*function handleForm(event) { event.preventDefault(); }
form.addEventListener('submit', handleForm);*/


document.getElementById('category').onclick=function(){
  console.log(fashion.className);
  console.log(sfashion.className);
  if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
    fstock.className="stock-fashion-div";
    SstockFashion.className="stocks-list";
  }
  if(fashion.className==="fashiondisplay-fashion"){
    fashion.className="fashion";
     sfashion.className="category-list display-category";
  }
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(forder.className==="track-order display-track-order"){
   forder.className="track-order";
   order.className=null;
 }
 if(flist.className==="track-list display-track-list"){
   flist.className="track-list";
   lists.className=null;
 }
 if(dailyIncome.className==="track-daily-income display-track-income"){
  dailyIncome.className="track-daily-income";
    SincomeList[0].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(monthlyIncome.className==="track-monthly-income display-track-income"){
  monthlyIncome.className="track-monthly-income";
    SincomeList[1].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(yearlyIncome.className==="track-yearly-income display-track-income"){
  yearlyIncome.className="track-yearly-income";
    SincomeList[2].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(Ffeedback.className==="customer-feedback display-customer-feedback"){
  Ffeedback.className="customer-feedback";
  Sfeedback.className=null;
}
   if(cat.className==="Category"){
     cat.className+="display-category";
     category.className="div-color";
   }
   else if(cat.className==="Categorydisplay-category"){
     cat.className="Category";
      category.className=null;
   }
}

/*to display products onclick*/

document.getElementById('products').onclick=function(){
//var elms = document.querySelectorAll("[id='0']");
var elms=document.getElementsByClassName('category-list');
for(var i = 0; i < elms.length; i++){
  console.log(elms[i].className);
  if(elms[i].className==="category-list"){
  elms[i].className+=" display-category";
}
else{
  elms[i].className="category-list";
  console.log(elms[i]);
}
}
}

/*script for women and fashion form to display*/
sfashion.onclick=function(){
  console.log(fashion.className);
  console.log(sfashion.className);
  if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
    fstock.className="stock-fashion-div";
    SstockFashion.className="stocks-list";
  }
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(cat.className=="Categorydisplay-category"){
              //console.log(cat.className);
            cat.className="Category";
            category.className=null;
          }
 if(forder.className==="track-order display-track-order"){
           forder.className="track-order";
           order.className=null;
         }
    if(flist.className==="track-list display-track-list"){
           flist.className="track-list";
           lists.className=null;
         }
if(dailyIncome.className==="track-daily-income display-track-income"){
          dailyIncome.className="track-daily-income";
            SincomeList[0].className="income-list display-income-list";
            Sincome.className="div-color";
        }
  if(monthlyIncome.className==="track-monthly-income display-track-income"){
          monthlyIncome.className="track-monthly-income";
            SincomeList[1].className="income-list display-income-list";
            Sincome.className="div-color";
        }
  if(yearlyIncome.className==="track-yearly-income display-track-income"){
          yearlyIncome.className="track-yearly-income";
            SincomeList[2].className="income-list display-income-list";
            Sincome.className="div-color";
        }
  if(Ffeedback.className==="customer-feedback display-customer-feedback"){
          Ffeedback.className="customer-feedback";
          Sfeedback.className=null;
        }
  if(fashion.className==="fashion"){
    fashion.className+="display-fashion";
    sfashion.className+=" div-color";
  }
   else if(fashion.className==="fashiondisplay-fashion"){
     fashion.className="fashion";
      sfashion.className="category-list display-category";
   }
}

/*var stock=document.getElementById('stocks');
var Sstock=document.getElementsByClassName('stocks-list');
var fstock=document.getElementById('stock-fashion-div');
var SstockFashion=document.getElementById('stock-fashion');
/*To toggle stock status side bar*/
stock.onclick=function(){
  if(Sstock[0].className==="stocks-list"){
  Sstock[0].className+=" display-stocks";
  stock.className+=" div-color";
}
else if(Sstock[0].className==="stocks-list display-stocks"){
  Sstock[0].className="stocks-list";
  stock.className="stocks";
}
}

/*to display stock form*/
SstockFashion.onclick=function(){
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(cat.className==="Categorydisplay-category"){
    cat.className="Category";
     category.className=null;
  }
  if(fashion.className==="fashiondisplay-fashion"){
    fashion.className="fashion";
     sfashion.className="category-list display-category";
  }
  if(forder.className==="track-order display-track-order"){
   forder.className="track-order";
   order.className=null;
 }
 if(flist.className==="track-list display-track-list"){
   flist.className="track-list";
   lists.className=null;
 }
 if(dailyIncome.className==="track-daily-income display-track-income"){
  dailyIncome.className="track-daily-income";
    SincomeList[0].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(monthlyIncome.className==="track-monthly-income display-track-income"){
  monthlyIncome.className="track-monthly-income";
    SincomeList[1].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(yearlyIncome.className==="track-yearly-income display-track-income"){
  yearlyIncome.className="track-yearly-income";
    SincomeList[2].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(Ffeedback.className==="customer-feedback display-customer-feedback"){
  Ffeedback.className="customer-feedback";
  Sfeedback.className=null;
}
if(fstock.className==="stock-fashion-div"){
  fstock.className+=" display-stock-fashion-div";
  SstockFashion.className+=" div-color";
}
else if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
  fstock.className="stock-fashion-div";
  SstockFashion.className="stocks-list display-stocks";
}
}

/*track order table to get displayed*/
/*var order=document.getElementById('orders');
var forder=document.getElementById('track-order');*/
order.onclick=function(){
  if(forder.className==="track-order display-track-order"){
    forder.className="track-order";
    order.className=null;
  }
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(cat.className==="Categorydisplay-category"){
    cat.className="Category";
     category.className=null;
  }
  if(fashion.className==="fashiondisplay-fashion"){
    fashion.className="fashion";
     sfashion.className="category-list display-category";
  }
  if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
    fstock.className="stock-fashion-div";
    SstockFashion.className="stocks-list display-stocks";
  }
  if(flist.className==="track-list display-track-list"){
    flist.className="track-list";
    lists.className=null;
  }
  if(dailyIncome.className==="track-daily-income display-track-income"){
   dailyIncome.className="track-daily-income";
     SincomeList[0].className="income-list display-income-list";
     Sincome.className="div-color";
 }
 if(monthlyIncome.className==="track-monthly-income display-track-income"){
   monthlyIncome.className="track-monthly-income";
     SincomeList[1].className="income-list display-income-list";
     Sincome.className="div-color";
 }
 if(yearlyIncome.className==="track-yearly-income display-track-income"){
   yearlyIncome.className="track-yearly-income";
     SincomeList[2].className="income-list display-income-list";
     Sincome.className="div-color";
 }
 if(Ffeedback.className==="customer-feedback display-customer-feedback"){
   Ffeedback.className="customer-feedback";
   Sfeedback.className=null;
 }
  if(forder.className==="track-order"){
    forder.className+=" display-track-order";
    order.className+=" div-color";
  }
  else if(forder.className==="track-order display-track-order"){
    forder.className="track-order";
    order.className=null;
  }
}

/*To toggle track list*/
  //<div id="list">Track List</div>
/*var lists=document.getElementById('list');
var flist=document.getElementById('track-list');*/
/*lists.onclick=function(){
  if(forder.className==="track-order display-track-order"){
    forder.className="track-order";
    order.className=null;
  }
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(cat.className==="Categorydisplay-category"){
    cat.className="Category";
     category.className=null;
  }
  if(fashion.className==="fashiondisplay-fashion"){
    fashion.className="fashion";
     sfashion.className="category-list display-category";
  }
  if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
    fstock.className="stock-fashion-div";
    SstockFashion.className="stocks-list display-stocks";
  }
  if(forder.className==="track-order display-track-order"){
   forder.className="track-order";
   order.className=null;
 }
 if(dailyIncome.className==="track-daily-income display-track-income"){
  dailyIncome.className="track-daily-income";
    SincomeList[0].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(monthlyIncome.className==="track-monthly-income display-track-income"){
  monthlyIncome.className="track-monthly-income";
    SincomeList[1].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(yearlyIncome.className==="track-yearly-income display-track-income"){
  yearlyIncome.className="track-yearly-income";
    SincomeList[2].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(Ffeedback.className==="customer-feedback display-customer-feedback"){
  Ffeedback.className="customer-feedback";
  Sfeedback.className=null;
}
  if(flist.className==="track-list"){
    flist.className+=" display-track-list";
    lists.className="div-color";
  }
  else if(flist.className==="track-list display-track-list"){
    flist.className="track-list";
    lists.className=null;
  }
} */

/*income-list displaying when track income is clicked*/
/*var Sincome=document.getElementById('income');
var SincomeList=document.getElementsByClassName('income-list');*/
Sincome.onclick=function(){
  for(var i=0;i<SincomeList.length;i++){
  if(SincomeList[i].className==="income-list"){
    SincomeList[i].className+=" display-income-list";
    Sincome.className="div-color";
  }
  else if(SincomeList[i].className==="income-list display-income-list"){
    SincomeList[i].className="income-list";
    Sincome.className=null;
  }
}
}
/*To display daily income table*/
/*var dailyIncome=document.getElementById('track-daily-income');*/
SincomeList[0].onclick=function(){
  if(forder.className==="track-order display-track-order"){
    forder.className="track-order";
    order.className=null;
  }
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(cat.className==="Categorydisplay-category"){
    cat.className="Category";
     category.className=null;
  }
  if(fashion.className==="fashiondisplay-fashion"){
    fashion.className="fashion";
     sfashion.className="category-list display-category";
  }
  if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
    fstock.className="stock-fashion-div";
    SstockFashion.className="stocks-list display-stocks";
  }
  if(forder.className==="track-order display-track-order"){
   forder.className="track-order";
   order.className=null;
 }
 if(flist.className==="track-list display-track-list"){
  flist.className="track-list";
  lists.className=null;
}
if(monthlyIncome.className==="track-monthly-income display-track-income"){
  monthlyIncome.className="track-monthly-income";
    SincomeList[1].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(yearlyIncome.className==="track-yearly-income display-track-income"){
  yearlyIncome.className="track-yearly-income";
    SincomeList[2].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(Ffeedback.className==="customer-feedback display-customer-feedback"){
  Ffeedback.className="customer-feedback";
  Sfeedback.className=null;
}
  if(dailyIncome.className==="track-daily-income"){
    dailyIncome.className+=" display-track-income";
    SincomeList[0].className+=" div-color";
    Sincome.className=null;
  }

  else if(dailyIncome.className==="track-daily-income display-track-income"){
    dailyIncome.className="track-daily-income";
      SincomeList[0].className="income-list display-income-list";
      Sincome.className="div-color";
  }
}

/*To display monthly income table*/

/*var monthlyIncome=document.getElementById('track-monthly-income');*/
SincomeList[1].onclick=function(){
  if(forder.className==="track-order display-track-order"){
    forder.className="track-order";
    order.className=null;
  }
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(cat.className==="Categorydisplay-category"){
    cat.className="Category";
     category.className=null;
  }
  if(fashion.className==="fashiondisplay-fashion"){
    fashion.className="fashion";
     sfashion.className="category-list display-category";
  }
  if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
    fstock.className="stock-fashion-div";
    SstockFashion.className="stocks-list display-stocks";
  }
  if(forder.className==="track-order display-track-order"){
   forder.className="track-order";
   order.className=null;
 }
 if(flist.className==="track-list display-track-list"){
  flist.className="track-list";
  lists.className=null;
}
if(dailyIncome.className==="track-daily-income display-track-income"){
  dailyIncome.className="track-daily-income";
    SincomeList[0].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(yearlyIncome.className==="track-yearly-income display-track-income"){
  yearlyIncome.className="track-yearly-income";
    SincomeList[2].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(Ffeedback.className==="customer-feedback display-customer-feedback"){
  Ffeedback.className="customer-feedback";
  Sfeedback.className=null;
}
  if(monthlyIncome.className==="track-monthly-income"){
    monthlyIncome.className+=" display-track-income";
    SincomeList[1].className+=" div-color";
    Sincome.className=null;
  }
  else if(monthlyIncome.className==="track-monthly-income display-track-income"){
    monthlyIncome.className="track-monthly-income";
      SincomeList[1].className="income-list display-income-list";
      Sincome.className="div-color";
  }
}

/*To display monthly income table*/

/*var yearlyIncome=document.getElementById('track-yearly-income');*/
SincomeList[2].onclick=function(){
  if(forder.className==="track-order display-track-order"){
    forder.className="track-order";
    order.className=null;
  }
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(cat.className==="Categorydisplay-category"){
    cat.className="Category";
     category.className=null;
  }
  if(fashion.className==="fashiondisplay-fashion"){
    fashion.className="fashion";
     sfashion.className="category-list display-category";
  }
  if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
    fstock.className="stock-fashion-div";
    SstockFashion.className="stocks-list display-stocks";
  }
  if(forder.className==="track-order display-track-order"){
   forder.className="track-order";
   order.className=null;
 }
 if(flist.className==="track-list display-track-list"){
  flist.className="track-list";
  lists.className=null;
}
if(dailyIncome.className==="track-daily-income display-track-income"){
  dailyIncome.className="track-daily-income";
    SincomeList[0].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(monthlyIncome.className==="track-monthly-income display-track-income"){
  monthlyIncome.className="track-monthly-income";
    SincomeList[1].className="income-list display-income-list";
    Sincome.className="div-color";
}
  if(yearlyIncome.className==="track-yearly-income"){
    yearlyIncome.className+=" display-track-income";
    SincomeList[1].className+=" div-color";
    Sincome.className=null;
  }
  else if(yearlyIncome.className==="track-yearly-income display-track-income"){
    yearlyIncome.className="track-yearly-income";
      SincomeList[2].className="income-list display-income-list";
      Sincome.className="div-color";
  }
}

/*customer feeback to get displayed*/
var Sfeedback=document.getElementById('feedback');
var Ffeedback=document.getElementById('customer-feedback');
Sfeedback.onclick=function(){
  if(forder.className==="track-order display-track-order"){
    forder.className="track-order";
    order.className=null;
  }
  if(proform.className==="form-1 displayform"){
    proform.className="form-1";
    profile.className=null;
  }
  if(cat.className==="Categorydisplay-category"){
    cat.className="Category";
     category.className=null;
  }
  if(fashion.className==="fashiondisplay-fashion"){
    fashion.className="fashion";
     sfashion.className="category-list display-category";
  }
  if(fstock.className==="stock-fashion-div display-stock-fashion-div"){
    fstock.className="stock-fashion-div";
    SstockFashion.className="stocks-list display-stocks";
  }
  if(forder.className==="track-order display-track-order"){
   forder.className="track-order";
   order.className=null;
 }
 if(flist.className==="track-list display-track-list"){
  flist.className="track-list";
  lists.className=null;
}
if(dailyIncome.className==="track-daily-income display-track-income"){
  dailyIncome.className="track-daily-income";
    SincomeList[0].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(monthlyIncome.className==="track-monthly-income display-track-income"){
  monthlyIncome.className="track-monthly-income";
    SincomeList[1].className="income-list display-income-list";
    Sincome.className="div-color";
}
if(yearlyIncome.className==="track-yearly-income display-track-income"){
 yearlyIncome.className="track-yearly-income";
   SincomeList[2].className="income-list display-income-list";
   Sincome.className="div-color";
}
  if(Ffeedback.className==="customer-feedback"){
    Ffeedback.className+=" display-customer-feedback";
    Sfeedback.className="div-color";
  }
  else if(Ffeedback.className==="customer-feedback display-customer-feedback"){
    Ffeedback.className="customer-feedback";
    Sfeedback.className=null;
  }
}

//To edit details of admin on clicked

  </script>

  </body>
