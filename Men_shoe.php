<!Doctype html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Final_Project</title>
  <link rel="stylesheet" href="./Css/global.css">
  <link rel="stylesheet" href="./Css/men_shoe.css">
  
    

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  
  <!-- Adding search bar JavaScript -->
  <script src="./Js/invoice.js"></script>
  <script src="./Js/search.js"></script>
</head>

<?php include "Member/classes/Shoe.php"?>
<?php include "Member/classes/User.php"?>
<?php include "Member/classes/Sort.php"?>
<?php session_start(); ?>

<body>
<Header>
<img src="./Media/icon.jpg">
</Header>
<div class = "headermenu">
<a href="index.php"><b>Home</a> &emsp; <a href="Login.php"><b>Login</a>&emsp;<a href="Men_shoe.php"><b>Men's Shoes</a>
&ensp;<a href="Women_shoe.php"><b>Women's Shoes</a>&ensp; <a href="Contact.php"><b>Contact</a>
</div>
 
	<section id="mini">
	
			<section id="boxes">
			
				<?php 
				
					$shoe = Shoe::Readshoes();
					
					
					$selected = 0;
					//GET DATA FROM COOKIE
					if(isset($_COOKIE['Cookie_Sort'])){
						$selected = $_COOKIE['Cookie_Sort'];
											
						switch($selected){
							case 1: Sorting::sortByPriceDec($shoe);
									break;
							case 2: Sorting::sortByPriceInc($shoe);
									break;
						}
					}
					
					if(isset($_POST["v_sort"])){
						$selected = $_POST["v_sort"];
						//Create Cookie for saving sort option
						$expiration = time() + (60*60*24*30); //30 days
						setcookie('Cookie_Sort', $_POST["v_sort"], $expiration);
						
						switch($selected){
							case 1: Sorting::sortByPriceDec($shoe);
									break;
							case 2: Sorting::sortByPriceInc($shoe);
									break;
						}
					}
				?>
				
			  <form action ='#' method = "post">
					<big>Sort by</big>
						<select name="v_sort" onchange = "this.form.submit();">
							<option value=0 <?php if($selected == 0)echo "selected"; ?>>Not sorted</option>
							<option value=1 <?php if($selected == 1)echo "selected"; ?>>By Price High to Low</option>
							<option value=2 <?php if($selected == 2)echo "selected"; ?>>By Price Low to High</option>
						</select>
					</form>
			  <div class="container">
			 <?php			   
			   Shoe::Display($shoe);
			 ?> 

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