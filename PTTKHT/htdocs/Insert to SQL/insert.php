<?php
		$host = "localhost";
		$user = "root";
		$pass = "";
		$database = "btcsdl";
		$conn = new mysqli($host,$user,$pass,$database);
		if($conn->connect_error)
		{
			die("Status: Connection failed $connect->connect_error");
		}else
		{
			echo "<br>Status: Connected successfully";
		}

		$Title = $_POST['title'];
		$Content = $_POST['content'];
		echo"<br>done<br>";
		$sql = "INSERT INTO bangdl(title,content)
		VALUES('ad','a')";
		if($conn ->query($sql) ==  TRUE)
			echo "donee";
		else
		{
			echo "error".$sql."<br>";
			$conn->error;
		}
		$conn->close();
		header("refresh:2; url=index.php");
?>