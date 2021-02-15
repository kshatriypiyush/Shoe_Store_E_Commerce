<!Doctype html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Final_Project</title>
  <link rel="stylesheet" href="./Css/global.css">
  <link rel="stylesheet" href="./Css/checkout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="./Js/invoice.js"></script>
  <script src="./Js/payment.js"></script>
</head>
<body onload="getfast()">
<Header>
<img src="./Media/icon.jpg">
</Header>
<div class = "headermenu">
<a href="Landing_page_login.php"><b>Home</a> &ensp; <a href="Men_shoe.php"><b>Men's Shoes</a>
&ensp; <a href="Women_shoe.php"><b>Women's Shoes</a>&ensp; <a href="Shopping.php"><b>Shopping</a>
&ensp; <a href="Checkout.php"><b>Payment</a>&ensp; <a href="Logout.php"><b>Logout</a>&ensp; <a href="Contact.php"><b>Contact</a>
</div>
<div class="backside">
<div class="check">
<table id= "shoelist">
<tr>
<td>
<h2>Product Name</h2>
<hr> 
</td>
<td>
<h2>Price</h2>
<hr> 
</td>
<td>
<h2>Quantity</h2>
<hr> 
</td>
<td>
<h2>Totals</h2>
<hr> 
</td>
</tr>
<tr>
<td>
<h3>Shoes</h3>
</td>
<td>
<label id="price"></label>
</td>
<td>
<h3 id="quantity">Quantity</h3>
</td>
<td>
<h3>Subtotal:<label id="Total"></label></h3>
<h3>The taxt amount is as follows:</h3>
<p id="tax"></p>
</tr>
</table>
</div>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="Landing_page_login.php" onsubmit="paymentdone()">
      
        <div class="row">
          <div class="col-50">
 <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="PIYUSH KSHATRIYA" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="kshatriyapiyush@yahoo.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="3400 linton avenue" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Montreal" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="QC" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="H3S 1T2" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="PIYUSH KSHATRIYA" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="3215-4215-9568-6325" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="APRIL" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2022" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="859" required>
              </div>
            </div>
          </div>
          
        </div>
 
        <input type="submit" value="Continue to checkout" class="btn"><button class="btn" onclick="redo()">Clear</button>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <i class="fa fa-shopping-cart"></i><span class="price" id="cartquant" style="color:black" ></span></h4>
      <hr>
      <p>Total <i style="font-size:24px" class="fa">&#xf0d6;</i><span class="price" id="cartprice" style="color:black"></span></p>
    </div>
  </div>
</div>

</div>
<Footer>
<div class = "footermenu">
<a href="https://www.instagram.com/"><img src="./Media/instagram.png"></a> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="https://www.facebook.com/"><img src="./Media/facebook.png"></a>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="https://www.google.com/"><img src="./Media/google-plus.png"></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="https://www.skype.com/en/"><img src="./Media/skype.png"></a>
</div>
<p id="cp">Copyright © 2020 Piyush and Manan All rights reserved. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
#Hand-Crafted Shoes</p>
</Footer>
</body>
</html>