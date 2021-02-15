
<?php
require_once "PDO_Database.php";
include "Rating.php";

echo "<link rel='stylesheet' href='./Css/men_shoe.css'>";


class Shoe{
	
	private $ID;
	private $Name;
	private $Make;
	private $OldPrice;
    private $Price;
	private $Color;
	private $Image;
	
	public function Shoe($Name, $make, $oldPrice, $price, $color, $image, $id = null)
	{
		$this->ID = $id;
		$this->Name = $Name;
		$this->Make = $make;
		$this->OldPrice = $oldPrice;
		$this->Price = $price;
		$this->Color = $color;
		$this->Image = $image;
	}
	
	public function Create(){
		try{
			$database = PDO_Database::Get_Instance();
			
			$query = "INSERT INTO shoe(Name, Make, OldPrice, Price, Color, Image) ";
		    $query .= " VALUES (?,?,?,?,?,?)";
					
			$statement = $database->Connection->prepare($query);
			$statement->bindParam(1, $this->Make);
			$statement->bindParam(2, $this->Make);
			$statement->bindParam(3, $this->OldPrice);
			$statement->bindParam(4, $this->Price);
			$statement->bindParam(5, $this->Color);
			$statement->bindParam(6, $this->Image);
			
			$statement->execute();
			echo "Shoe ID = ". $database->Connection->lastInsertId();
		}catch(PDOException $e)
		{
			echo "INSERT Query Failed : ".$e->getMessage();
		}
	}
	
	public static function Readshoes(){
		try{
			$database = PDO_Database::Get_Instance();
			$query = "SELECT * FROM shoe";
			$statement = $database->Connection->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
			
		}catch(PDOException $e){
			echo "Query Failed: ". $e->getMessage();
		}
	}
	
	public static function Search_By_ID($shoe_id){
		try{
			$database = PDO_Database::Get_Instance();
			$query = "SELECT * FROM shoe WHERE ID = $shoe_id";
			$statement = $database->Connection->prepare($query);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			return $result;
			
		}catch(PDOException $e){
			echo "Query Failed: ". $e->getMessage();
		}
	}
	
	public static function Display_Details($shoe_id, $user_id = null){
		$shoe = self::Search_By_ID($shoe_id);
		
	//	echo '<div class= "card mx-auto w-100">';
		//Card Body
		//echo '<div class= "row">';
			
		//	echo '<div class= "m-3 pb-3 col-md-5 ">';
			
			echo "<img src='Media/".$shoe['Image']. " ' width = '100%' >";
			
		//	echo '</div>';//end of col1
			
			//echo '<div class= "col-md-4">';
			echo '<h6><b><u>'.$shoe['Make'].'</u></b></h6>';
			
			
			echo '<h6>'.$shoe['Describe'].'</h6>';
			echo '<h6>Price:'.$shoe['Price'].'</h6>';
				echo '<h6>Name:'.$shoe['Name'].'</h6>';
		    echo '<h6>Color:'.$shoe['Color'].'</h6>';
			//echo '</div>';//end of col2
			
			if($user_id==null){
				echo '<a href = "../Men_Shoe.php">';
				echo "<button class='btn btn-secondary'>". '<span class="fa fa-caret-left"></span></button>';
			echo '</a>';
			}
			//echo '<div class= "col-md-1">';
			else{
			echo '<a href = "Men_Shoe.php">';
			
			echo "<button class='btn btn-secondary'>". '<span class="fa fa-caret-left"></span></button>';
			echo '</a>';
			//echo '</div>';//end of col3
			
	//    echo '</div>';//end of row1
	//	echo '</div>';//end of body
		
		//echo '<div class= "card-footer">';
		//echo '<div class= "row">';
		//echo '<div class= "col-md-6">';//col1
		

			$avg_rating = self::Calculate_Rating($shoe_id,$user_id);				
			
		//echo '</div>';//end of col1
		//echo '<div class= "col-md-6">';//col2
			if(empty($avg_rating)){
				
				Rating::Display_Form($shoe_id , $user_id, $avg_rating);
			}
			else{Rating::Display_Stars($avg_rating);}
	//	echo '</div>';//end of col2
	//	echo '</div>';//end of row2
	//	echo '</div>';//end footer
			}
		
		//-----------
		
	}
	
	public static function Calculate_Rating($shoe_id , $user_id = null){
		try{
			$query = "";
			if(empty($user_id)){
				$query = "SELECT AVG(Rating) FROM ratings WHERE Shoe_ID = $shoe_id ";
			
			}else{
				$query = "SELECT AVG(Rating) FROM ratings WHERE Shoe_ID = $shoe_id AND User_ID = $user_id";
			}
			
			$database = PDO_Database::Get_Instance();
			$statement = $database->Connection->prepare($query);
			$statement->execute();
			
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			return $result['AVG(Rating)'];
			
		}catch(PDOException $e){
			echo "Query Failed: ". $e->getMessage();
		}
	}
	
	public static function Display(&$shoe,$user_id=null){
		
		$count=1;
		echo "<section id='mini>";
		foreach($shoe as $Element){
			
			if($count==1)
			{
				echo "<section id='boxes'>";
				echo "<div class='container'>";
				echo "<div class='box'>";
				
			}
			else
			{
				
				echo "<div class='box'>";
				
			}
			  
				
				echo "<img id='shoe".$count."' src = \"Media/".$Element['Image']." \" height='auto' width='300px' />";
				
				

				echo "<dl>";
				echo "<h3 style=\"color:#CC0000;\">";
				echo $Element['Make'];
				echo "</h3>";
	            echo $Element['Describe'];
				if($Element['OldPrice'] > 0){
					echo "<dt><del style=\"color:red\"><h4 style=\"color:grey\">".$Element['OldPrice']."</h4></del></dt>";
				}
				echo "<dt><h4 style=\"color:black;\">";
				echo "$".$Element['Price']."<br>";
				echo "</h4></dt>";
				if($user_id!=null){
				$avg_rating = self::Calculate_Rating($Element['ID'],$user_id);				
				echo "<dt>".Rating::Display_Stars($avg_rating)."</dt>";
				echo "<dt><a href='shoe_details.php?ID=".$Element['ID']."'> View Details >> </a></dt>";

				}
				else{
				echo "<dt><a href='Member/shoe_details.php?ID=".$Element['ID']."'> View Details >> </a></dt>";
				}
				echo "</dl>";
				
				echo "</div>";
				
			if($count == 3){
				echo "</div>";
				echo "</section>";
			//	$count = 1;
			}
			// if($count > 3){
			// 	$count = 1;
			// } 
			$count = $count + 1;
		}
		echo "</section>";
	
	}
}
?>