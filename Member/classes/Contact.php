<?php 
require_once "PDO_Database.php";

class Contact{
	private $user_id;
	private $First_Name;
	private $Last_Name;
	private $Country;
	private $Review;
	
	function __construct($first_name, $last_name, $country, $review, $user_id = null){
		$this->user_id = $user_id;
	    $this->First_Name = $first_name;
	    $this->Last_Name = $last_name;
	    $this->Country = $country;
	    $this->Review = $review;
	}
	
	public function Create(){
		try{
			$database = PDO_Database::Get_Instance();
			
			$query = "INSERT INTO contact(First_Name, Last_Name, Country, Review) ";
		    $query .= " VALUES (?,?,?,?)";
			
			
			
			$statement = $database->Connection->prepare($query);
			$statement->bindParam(1, $this->First_Name);
			$statement->bindParam(2, $this->Last_Name);
			$statement->bindParam(3, $this->Country);
			$statement->bindParam(4, $this->Review);
			
			$statement->execute();
			echo "User_ID = ". $database->Connection->lastInsertId();
		}catch(PDOException $e)
		{
			echo "INSERT Query Failed : ".$e->getMessage();
		}
	}
	public function Update($column, $value){
		$database = PDO_Database::Get_Instance();
		
    }
}
?>