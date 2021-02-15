
<!Doctype html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Final_Project</title>
  <link rel="stylesheet" href="./Css/global.css">
  <link rel="stylesheet" href="./Css/men_shoe.css">
  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- CSS for Awesome Icons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  
  
  <!-- Adding search bar JavaScript -->
  <script src="./Js/search.js"></script>
</head>

<?php include "classes/Shoe.php"?>
<?php include "classes/User.php"?>
<?php ob_start(); ?>

<body>

 

   <?php 
   if(! isset($_SESSION)){
    session_start();
  }
					if(isset($_GET['ID'])){
            if(isset($_SESSION['status'])==true){
          $user = User::Get_ID($_SESSION['username']);
            }
            else{$user=null;}
						Shoe::Display_Details($_GET['ID'],$user);
					}
					
				?>
			


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