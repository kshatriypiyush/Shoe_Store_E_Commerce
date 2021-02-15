<!Doctype html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Final_Project</title>
  <link rel="stylesheet" href="./Css/global.css">
  <link rel="stylesheet" href="./Css/login.css">
  
  <!-- include all js files here --> <!-- login performed using JavaScript -->
 <!-- <script src="./Js/login.js"></script> -->

<!-- include all PHP files here --> <!-- login performed using PHP -->

</head>




<?php ob_start(); ?>
<?php include "Member/classes/User.php"?>

<body>

<Header>
<img src="./Media/icon.jpg"><img src="./Media/icon.jpg">
</Header>


<div class = "headermenu">
<a href="index.php"><b>Home</a> &emsp; <a href="Login.php"><b>Login</a>&emsp;<a href="Men_shoe.php"><b>Men's Shoes</a>
&ensp; <a href="Women_shoe.php"><b>Women's Shoes</a>&ensp; <a href="Contact.php"><b>Contact</a>
</div>


 <?php 
						$Cookie_username = '';
						$Cookie_Password= '';
						if(isset($_COOKIE['Cookie_username']) && isset($_COOKIE['Cookie_Password']))
						{
							$Cookie_username = $_COOKIE['Cookie_username'];
							$Cookie_Password = $_COOKIE['Cookie_Password'];
						}
				    ?>
					
 <form  action='#' method="post">
  <img src="./Media/background.jpg" class="test">
    <div class="mini">
	<h1>Login</h1>

    Username
    <input type='text' placeholder="Enter Username" name='username' value = '<?php echo $Cookie_username; ?>' required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" id="password" value = '<?php echo $Cookie_Password; ?>' required>

    <button type="submit" name="Submit" >Submit</button><br>
	<a href="Member/SignUp.php">Are you New here?</a>
	</div>
 </form>
  

<!-- <form style="position: relative;" method="GET" action="">
    <img src="bucky.jpg"  />
    <div style="position: absolute; left: 100px; top: 250px;"> 
       <input type="text" placeholder="Texte..." /> <br><br>
       <input type="text" placeholder="Texte..."/> <br><br>
       <button type="submit">Go</button>
    </div>
</form> -->

	<?php
				        if(! isset($_SESSION)){
							session_start();
						}
						if(isset($_POST['Submit'])){
							$username = $_POST['username'];
							$password = $_POST['Password'];
							
							if(User::username_Exists($username)){
								if(User::Login($username, $password) == true){
									echo '<script language="javascript">';
									echo 'alert("message successfully sent")';
									echo '</script>';
									$_SESSION['username'] = $_POST['username'];
								    $_SESSION['User_ID'] = User::Get_ID($username);
									$_SESSION['Role_ID'] = User::Get_Role($username);
									$_SESSION['status'] = User::Login($username, $password);
									
									//SAVE LOGIN DATA IN COOKIE-------------------
									if(isset($_POST["Remember_Me"])){//checkbox
										$expiration = time() + (60*60*24*365);//365 days
										setcookie('Cookie_username', $_POST['username'], $expiration);
										setcookie('Cookie_Password', $_POST['Password'], $expiration);
										
										if(count($_COOKIE) > 0)
											echo "<br>Cookies are enabled <br>";
									}
									//---------------------------------------------
									if($_SESSION['Role_ID'] == 0){
										header('Location: Member/Landing_page_login.php');
										
									}else
									if($_SESSION['Role_ID'] == 1){
										header('Location: Admin/index.php');
									}
									
								}else{
									echo "Your password is wrong!";
								}
							}else{
								echo "Your username is wrong!";
								}
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
#Hand-Crafted Shoes
</p>
</Footer>
</body>
</html>