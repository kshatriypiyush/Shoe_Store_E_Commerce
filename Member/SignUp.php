<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Css/Signup.css">
</head>

<!-- Including the Php file-->
<?php include "classes/User.php"?>
<body>

<form action="#" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
    Username:<input type="text" placeholder="Enter Username" name="username" id="email" required>
    First Name: <input type='text' placeholder="Enter First Name" name='First_Name'   required>
	Last Name: <input type='text' placeholder="Enter Last Name" name='Last_Name'    required>
    Password: <input type="password" placeholder="Enter Password" name="Password" id="psw" required>

    <hr>

    <button type="submit" class="registerbtn" name="Submit">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="../Login.php">Sign in</a>.</p>
  </div>
</form>

	<?php
				
						if(isset($_POST['Submit'])){
							$first_name = $_POST['First_Name'];
							$last_name = $_POST['Last_Name'];
							$username = $_POST['username'];
							$password = $_POST['Password'];
							echo '<script language="javascript">';
							echo 'alert("message successfully sent")';
							echo '</script>';
							if(! User::username_Exists($username)){
								$obj = new User($first_name, $last_name, $username, $password);
								$obj->Create();
								header('Location: ../Login.php');
							}else{
								echo "Error: Your email already exists ! Try another one or Change your password.";
							}
							
						}
						
					?>
					
</body>
</html>
