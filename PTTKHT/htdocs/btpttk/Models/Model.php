<?php
class Model
{
	var $conn;
	public function __construct()
	{
		$host = "localhost";
		$user = "root";
		$pass = "";
		$database = "btcsdl";
		$this->conn = new mysqli($host,$user,$pass,$database);
		if($this->conn->connect_error)
		{
			die("Status: Connection failed $connect->connect_error");
		}else
		{
			echo "<br>Status: Connected successfully";
		}
	}
}
?>