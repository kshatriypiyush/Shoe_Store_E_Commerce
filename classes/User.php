<?php 
require_once "PDO_Database.php";

class User{
	private $user_id;
	private $First_Name;
	private $Last_Name;
	private $username;
	private $Password;
	
	function __construct($first_name, $last_name, $username, $password, $user_id = null){
		$this->user_id = $user_id;
	    $this->First_Name = $first_name;
	    $this->Last_Name = $last_name;
	    $this->username = $username;
	    $this->Password = $password;
	}
	
	public function Create(){
		try{
			$database = PDO_Database::Get_Instance();
			
			$query = "INSERT INTO users(First_Name, Last_Name, username, Password) ";
		    $query .= " VALUES (?,?,?,?)";
			
			$crypted_password = MD5($this->Password);
			
			$statement = $database->Connection->prepare($query);
			$statement->bindParam(1, $this->First_Name);
			$statement->bindParam(2, $this->Last_Name);
			$statement->bindParam(3, $this->username);
			$statement->bindParam(4, $crypted_password);
			
			$statement->execute();
			echo "User ID = ". $database->Connection->lastInsertId();
		}catch(PDOException $e)
		{
			echo "INSERT Query Failed : ".$e->getMessage();
		}
	}
	public function Update($column, $value){
		$database = PDO_Database::Get_Instance();
		
	}
	public static function username_Exists($username){
		try{
			$database = PDO_Database::Get_Instance();
			$query = "SELECT * FROM users WHERE username = '$username' ";
			$statement = $database->Connection->prepare($query);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			//print_r($result);
			
			if( ! empty($result['user_id'])){
				return true;
			}
			return false;
			
		}catch(PDOException $e){
			echo "SELECT Query Failed : ".$e->getMessage();
		}
	}
	public static function Get_Password($username){
		try{
			$database = PDO_Database::Get_Instance();
			$query = "SELECT * FROM users WHERE username = '$username' ";
			$statement = $database->Connection->prepare($query);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			return $result['Password'];
			
		}catch(PDOException $e){
			echo "SELECT Query Failed : ".$e->getMessage();
		}	
	}
	public static function Login($username, $password){
		try{
			$database = PDO_Database::Get_Instance();
			$query = "SELECT * FROM users WHERE username = '$username' ";
			$statement = $database->Connection->prepare($query);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			if(MD5($password) == $result['Password']){
				echo '<script>alert("Welcome to our Website \n Happy Shopping")</script>';
				return true;
			}
			return false;
			
		}catch(PDOException $e){
			echo "SELECT Query Failed : ".$e->getMessage();
		}
    }
	public static function Get_ID($username){
		try{
			$database = PDO_Database::Get_Instance();
			$query = "SELECT * FROM users WHERE username = '$username' ";
			$statement = $database->Connection->prepare($query);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			return $result['user_id'];
			
		}catch(PDOException $e){
			echo "SELECT Query Failed : ".$e->getMessage();
		}	
	}
	
		public static function Get_Role($email){
		try{
			$database = PDO_Database::Get_Instance();
			$query = "SELECT * FROM users WHERE Email = '$email' ";
			$statement = $database->Connection->prepare($query);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			return $result['Role_ID'];
			
		}catch(PDOException $e){
			echo "SELECT Query Failed : ".$e->getMessage();
		}	
	}
	
}


?>