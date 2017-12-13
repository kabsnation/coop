<?php
class Connect 
{
	private $db_host = 'localhost';
	private $db_user ='root';
	private $db_pass='1234';
	private $db_database ='coop';
	private $conn = '';

	public function __construct(){
		$this->conn = $this -> connectDB();
	}

	public function connectDB(){
		$conn = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_database) or die("Unable to connect to server");
		return $conn;
	}

	public function insert($query){
		$result = mysqli_query($this->conn, $query);
		return $result;
	}
	public function insertWithLastId($query){
		$result = mysqli_query($this->conn, $query);
		return $result;
	}

	public function select($query){
		$result = mysqli_query($this->conn, $query);
		return $result;
	}
}
?>