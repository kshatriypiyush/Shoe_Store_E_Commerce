<!Doctype html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Final_Project</title>
  <link rel="stylesheet" href="./Css/global.css">
  <link rel="stylesheet" href="./Css/men_shoe.css">
  <link rel="stylesheet" href="Css/float.css">
  <!-- Adding search bar JavaScript -->
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
  <script src="Js/invoice.js"></script>
</head>
<body>
<Header>
<img src="./Media/icon.jpg">
</Header>
<div class = "headermenu">
<a href="Landing_page_login.php"><b>Home</a> &ensp; <a href="Men_shoe.php"><b>Men's Shoes</a>
&ensp; <a href="Women_shoe.php"><b>Women's Shoes</a>&ensp; <a href="Shopping.php"><b>Shopping</a>
&ensp; <a href="Checkout.php"><b>Payment</a>&ensp; <a href="Logout.php"><b>Logout</a>&ensp; <a href="Contact.php"><b>Contact</a>
</div>

<!-- Code begins here -->

<a href="#mini" class="float">
<i class="fa fa-plus my-float"><br>Top</i>
</a>
	<section id="mini">
	<h1>SALE</h1>
	<div id="searchbar">
	<input type="text" placeholder="0" name="qunat" id="quant" value="0" required><label>:Total Number of Shoes selected</label><br>
	<br>
    <input type="text" placeholder="0" name="invoice" id="searchit" value="0" required><br>
	<br>
    <button onclick="getdetails()" id="button">Go To Invoice</button>
	</div>
	
	<section id="boxes">
			  <div id="result">
			  </div>
			  <div class="container">
			  
			  
				<div class="box" id="skyfall">
				<div class="card">
				<a href="./Media/shoe1.jpg">
					<img src="./Media/shoe1.jpg" style="width:100%"></a>
					<h3 class="shoes">The skyfall</h3>
					<p>
  <input type="hidden" id="shoe1" name="shoe1" value="60" onclick="checkit()">
  <label for="shoe1"><p class="price"> $60 </p></label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity1" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="turn up">
				<div class="card">
				<a href="./Media/shoe2.jpg">
					<img src="./Media/shoe2.jpg" style="width:100%"></a>
					<h3 class="shoes">Turn Up</h3>
					<p>
						  <input type="hidden" id="shoe2" name="shoe1" value="80">
  <label for="shoe1"> <p class="price"> $80 </p></label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity2" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="rock it">
				<div class="card">
				<a href="./Media/shoe3.jpg">
					<img src="./Media/shoe3.jpg" style="width:100%"></a>
					<h3 class="shoes">Rock it</h3>
					<p>
  <input type="hidden" id="shoe3" name="shoe1" value="95">
  <label for="shoe1"> <p class="price"> $95 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity3" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				  
				</div>
		    </section>
			
			<br>
			
			<section id="boxes">
			  
			  <div class="container">			
				<div class="box" id="fly">
				<div class="card">
				<a href="./Media/shoe4.jpg">
					<img src="./Media/shoe4.jpg" style="width:100%"></a>
					<h3 class="shoes">Fly</h3>
					<p>
  <input type="hidden" id="shoe4" name="shoe1" value="100">
  <label for="shoe1"> <p class="price"> $100 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity4" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="mixers">
				<div class="card">
				<a href="./Media/shoe5.jpg">
					<img src="./Media/shoe5.jpg" style="width:100%"></a>
					<h3 class="shoes">Mixers</h3>
					<p>
  <input type="hidden" id="shoe5" name="shoe1" value="150">
  <label for="shoe1"> <p class="price"> $150 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity5" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="booster">
				<div class="card">
				<a href="./Media/shoe6.jpg">
					<img src="./Media/shoe6.jpg" style="width:100%"></a>
					<h3 class="shoes">Booster</h3>
					<p>
  <input type="hidden" id="shoe6" name="shoe1" value="97">
  <label for="shoe1"> <p class="price"> $97 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity6" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
			</div>
            </section>			
			
			<section id="boxes">
			  
			  <div class="container" >
			<div class="box" id="cloud">
			<div class="card">
				<a href="./Media/shoe7.jpg">
					<img src="./Media/shoe7.jpg" style="width:100%"></a>
					<h3 class="shoes">Cloud</h3>
					<p>
  <input type="hidden" id="shoe7" name="shoe1" value="40">
  <label for="shoe1"> <p class="price"> $40 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity7" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="explosive">
				<div class="card">
				<a href="./Media/shoe8.jpg">
					<img src="./Media/shoe8.jpg" style="width:100%"></a>
					<h3 class="shoes">Explosive</h3>
					<p>
  <input type="hidden" id="shoe8" name="shoe1" value="122">
  <label for="shoe1"> <p class="price"> $122 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity8" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="titan">
				<div class="card">
				<a href="./Media/shoe9.jpg">
					<img src="./Media/shoe9.jpg" style="width:100%"></a>
					<h3 class="shoes">Titan</h3>
					<p>
  <input type="hidden" id="shoe9" name="shoe1" value="101">
  <label for="shoe1"> <p class="price"> $101 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity9" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>

	       </div>
	    </section>
			<section id="boxes">
			  <div id="result">
			  </div>
			  <div class="container">
			  
				<div class="box" id="butterfly">
				<div class="card">
				<a href="./Media/shoe1.jpg">
					<img src="./Media/Wshoe1.jpg" style="width:100%"></a>
					<h3 class="shoes">The butterfly</h3>
					<p>
  <input type="hidden" id="shoe10" name="shoe1" value="65">
  <label for="shoe1"> <p class="price"> $65 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity10" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="cream">
				<div class="card">
				<a href="./Media/Wshoe2.jpg">
					<img src="./Media/Wshoe2.jpg" style="width:100%"></a>
					<h3 class="shoes">cream</h3>
					<p>
  <input type="hidden" id="shoe11" name="shoe1" value="79">
  <label for="shoe1"> <p class="price"> $79 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity11" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="night">
				<div class="card">
				<a href="./Media/Wshoe3.jpg">
					<img src="./Media/Wshoe3.jpg" style="width:100%"></a>
					<h3 class="shoes">night</h3>
					<p>
  <input type="hidden" id="shoe12" name="shoe1" value="80">
  <label for="shoe1"> <p class="price"> $80 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity12" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				</div>
		    </section>
			
			<br>
			
			<section id="boxes">
			  
			  <div class="container">			
				<div class="box" id="airlight">
				<div class="card">
				<a href="./Media/Wshoe4.jpg">
					<img src="./Media/Wshoe4.jpg" style="width:100%"></a>
					<h3 class="shoes">airlight</h3>
					<p>
  <input type="hidden" id="shoe13" name="shoe1" value="82">
  <label for="shoe1"> <p class="price"> $82 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity13" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="blend">
				<div class="card">
				<a href="./Media/Wshoe5.jpg">
					<img src="./Media/Wshoe5.jpg" style="width:100%"></a>
					<h3 class="shoes">blend</h3>
					<p>
  <input type="hidden" id="shoe14" name="shoe1" value="190">
  <label for="shoe1"> <p class="price"> $190 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity14" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="wings">
				<div class="card">
				<a href="./Media/Wshoe6.jpg">
					<img src="./Media/Wshoe6.jpg" style="width:100%"></a>
					<h3 class="shoes">wings</h3>
					<p>
  <input type="hidden" id="shoe15" name="shoe1" value="156">
  <label for="shoe1"> <p class="price"> $156 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity15" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
			</div>
            </section>			

			<section id="boxes">
			  
			  <div class="container" >
			<div class="box" id="stars">
			<div class="card">
				<a href="./Media/Wshoe7.jpg">
					<img src="./Media/Wshoe7.jpg" style="width:100%"></a>
					<h3 class="shoes">stars</h3>
					<p>
  <input type="hidden" id="shoe16" name="shoe1" value="153">
  <label for="shoe1"> <p class="price"> $153 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity16" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="bloom">
				<div class="card">
				<a href="./Media/Wshoe8.jpg">
					<img src="./Media/Wshoe8.jpg" style="width:100%"></a>
					<h3 class="shoes">bloom</h3>
					<p>
  <input type="hidden" id="shoe17" name="shoe1" value="138">
  <label for="shoe1"> <p class="price"> $138 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity17" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
				
				<div class="box" id="alexa">
				<div class="card">
				<a href="./Media/Wshoe9.jpg">
					<img src="./Media/Wshoe9.jpg" style="width:100%"></a>
					<h3 class="shoes">alexa</h3>
					<p>
  <input type="hidden" id="shoe18" name="shoe1" value="300">
  <label for="shoe1"> <p class="price"> $300 </p> </label><br><br>
  <label for="quantity">Quantity (upto 10):</label>
<input type="number" id="quantity18" name="quantity" value="0" min="0" max="10"><br><br>
					</p>
					<p><button onclick="addingcart()">Add to Cart</button><button onclick="addingfav()">Fav</button></p>
					</div>
				</div>
	       </div>
	    </section>
			
	</section>

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