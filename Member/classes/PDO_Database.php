<?php 
$HOST = 'localhost';
$USER = 'root';
$PASSWORD = '';
$DB = 'shoe_db';

class PDO_Database{
	public $Connection;
	//Step 1 : Singleton Design pattern
	private static $instance;
	
	//Step 2 : Singleton Design pattern
	private function PDO_Database(){
		$this->OpenConnection();
	}
	//Step 3 : Singleton Design pattern
	public static function Get_Instance(){
		
		if(! isset(self::$instance)){
			self::$instance = new PDO_Database();
		}
		return self::$instance;
	}
	//------------------------------------------------
	public function OpenConnection(){
		global $HOST, $USER, $PASSWORD, $DB;
		
		try{
			$this->Connection = new PDO("mysql:host=$HOST;dbname=$DB", $USER, $PASSWORD);
			$this->Connection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
			
		}catch(PDOException $e){
			echo "Connection failed : ".$e->getMessage();
		}
	}
	public function CloseConnection(){
		$this->Connection = null;
	}
}
?>