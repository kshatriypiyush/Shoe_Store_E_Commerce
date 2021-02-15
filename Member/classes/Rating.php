<?php 
require_once "PDO_Database.php";
echo "<link rel='stylesheet' href='./Css/rate.css'>";
class Rating{
	private $User_ID;
	private $Shoe_ID;
	private $Rating;
	
	function Rating($shoe_id, $user_id, $rating){
		$this->User_ID = $user_id;
		$this->Shoe_ID  = $shoe_id;
		$this->Rating  = $rating;
	}
	public function Create(){
		try{
			$database = PDO_Database::Get_Instance();
			
			$query = "INSERT INTO ratings(User_ID, Shoe_ID, Rating) ";
		    $query .= " VALUES (?,?,?)";
			
			$statement = $database->Connection->prepare($query);
			$statement->bindParam(1, $this->User_ID);
			$statement->bindParam(2, $this->Shoe_ID);
			$statement->bindParam(3, $this->Rating);
		
			$statement->execute();
			
		}catch(PDOException $e)
		{
			echo "INSERT Query Failed : ".$e->getMessage();
		}
	}
	
	public static function Display_Form($shoe_id , $user_id, $rating){
		
		echo '<form action = "#" method= "post">';
		echo '<fieldset class="rating" ';
		if(! empty($rating)){
			echo "disabled = 'disabled'";
		}
		echo ' >';
		echo '<input type = "radio" id="star5" name="rating" value = "5" ';
		if($rating == 5){ echo "checked = 'checked' ";}
		echo 'onchange = "this.form.submit();"';
		echo '/><label for="star5" title="Excellent"><b> 5 stars</b></label>';
		
		echo '<input type = "radio" id="star4" name="rating" value = "4" ';
		if($rating == 4){ echo "checked = 'checked' ";}
		echo 'onchange = "this.form.submit();"';
		echo '/><label for="star5" title="Good"><b> 4 stars </b></label>';
		
		echo '<input type = "radio" id="star3" name="rating" value = "3" ';
		if($rating == 3){ echo "checked = 'checked' ";}
		echo 'onchange = "this.form.submit();"';
		echo '/><label for="star3" title="Not bad"><b> 3 stars</b></label>';
		
		echo '<input type = "radio" id="star2" name="rating" value = "2" ';
		if($rating == 2){ echo "checked = 'checked' ";}
		echo 'onchange = "this.form.submit();"';
		echo '/><label for="star2" title="Fair"><b>2 stars</b></label>';
		
		echo '<input type = "radio" id="star1" name="rating" value = "1" ';
		if($rating == 1){ echo "checked = 'checked' ";}
		echo 'onchange = "this.form.submit();"';
		echo '/><label for="star1" title="Poor"><b> 1 star</b></label><br><br>';
		
		echo '</fieldset></form>'; 
		
		if(isset($_POST["rating"])){
			$review = $_POST['rating'];
			$message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message');</script>";
			try{
			$database = PDO_Database::Get_Instance();
			
			$query = "INSERT INTO ratings(User_ID, Shoe_ID, Rating) ";
		    $query .= " VALUES (?,?,?)";
			
			$statement = $database->Connection->prepare($query);
			$statement->bindParam(1, $user_id);
			$statement->bindParam(2, $shoe_id);
			$statement->bindParam(3, $review);
		
			$statement->execute();
			
		 }catch(PDOException $e)
		{
			echo "INSERT Query Failed : ".$e->getMessage();
		}
		header('Location: Men_shoe.php');
		}
		
	}
	
	public static function Display_Stars($rating)  //Example 2.2 - 2 = 0.2
	{
		$full_stars = floor($rating); //Example full-stars = 2
		$empty_stars = 5 - $full_stars;//Example empty_stars = 3 - 1 = 2
		//Display full stars
		for($i=0; $i<$full_stars; $i++)
		{
			echo '<i class="fa fa-star float-left" style ="font-size:30px; color: #FF9900" > </i>';
		}
		//Display haf star
		if($rating - $full_stars >0){
			$empty_stars --;
			echo '<i class="fa fa-star-half-o float-left" style ="font-size:30px; color: #FF9900" > </i>';
		}
		//Display empty stars
		for($i=0; $i< $empty_stars; $i++){
			echo '<i class="fa fa-star-o float-left" style ="font-size:30px; color: #FF9900" > </i>';
	    }
	}
}

?>