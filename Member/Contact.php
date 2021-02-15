<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./Css/global.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<?php include "classes/Contact.php";?>
<body>

<Header>
<img src="./Media/icon.jpg">
</Header>

<div class = "headermenu">
<a href="Landing_page_login.php"><b>Home</a> &ensp; <a href="Men_shoe.php"><b>Men's Shoes</a>
&ensp; <a href="Women_shoe.php"><b>Women's Shoes</a>&ensp; <a href="Shopping.php"><b>Shopping</a>
&ensp; <a href="Checkout.php"><b>Payment</a>&ensp; <a href="Logout.php"><b>Logout</a>&ensp; <a href="Contact.php"><b>Contact</a>
</div>
<?php
$selected = 0;
if(isset($_POST["country"])){
						$selected = $_POST["country"];
						//Create Cookie for saving sort option
						
						
						switch($selected){
							case 1:$country = "India";
									break;
							case 2:$country = "Canada";
                                    break;
                            case 2:$country = "Usa";
									break;
						}
					}
				?>
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="Media/Contact.jpg" style="width:100%">
    </div>
    <div class="column">
      <form method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value=0 <?php if($selected == 0)echo "selected"; ?>>India</option>
          <option value=1 <?php if($selected == 1)echo "selected"; ?>>Canada</option>
          <option value=2 <?php if($selected == 2)echo "selected"; ?>>USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submit">
      </form>
      <script>

</script>
    </div>
  </div>
</div>
<?php
if(isset($_POST['submit'])){
							$first_name = $_POST['firstname'];
							$last_name = $_POST['lastname'];
							$review = $_POST['subject'];
                            $password = $country;
                            $obj = new Contact($first_name, $last_name, $country, $review);
						    $obj->Create();
                            header('Location: ../Login.php');
                           
}
?>
</body>
</html>