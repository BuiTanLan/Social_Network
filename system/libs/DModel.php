<?php 

class DModel{
	
	protected $db = array();

	public function __construct(){
		$connect = 'mysql:dbname=social_network; host=localhost:3306; charset=utf8';
		$user='root';
		$pass='123456789';
		$this->db = new Database($connect,$user,$pass);
	}
	
}


?>