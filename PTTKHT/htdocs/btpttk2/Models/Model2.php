<?php
require_once "Models/Model.php";

class Model2 extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

	public function getNews_controller() 
	{
		//truy van
		$sql = "SELECT * FROM bangdl";
		$rs = $this->conn->query($sql);
		$results = [];
		if($rs->num_rows > 0) //check null
		{
			while ($row = $rs->fetch_assoc()) //get data from "result"
			{
				$results[] = $row;
			}
		}
		return $results;
	}
	public function storeNews($form)
	{
		$sql = "INSERT INTO bangdl(title,content)
		VALUES('".$form['title']."','".$form['content']."')";
		$rs = $this->conn->query($sql);
		echo "<br>$sql<br>";
		if ($rs != true)
		{
			var_dump($this->conn->error);
			exit;
		}
		 return $rs;
	}

    public function deleteNews($id)
    {
        $sql ="DELETE FROM bangdl WHERE id='".$id."'";
        return $this->conn->query($sql);
    }

    public function getSingleNews($id)
    {
        $sql = "SELECT * from bangdl WHERE id=".$id;
        $rs = $this->conn->query($sql);
        return $rs->fetch_assoc();
    }

    public function saveNews(array $form)
    {
        $sql = "UPDATE bangdl SET title = '".$form['title']."', content = '".$form['content']."'  WHERE id ='".$form['id']."'";
        return $this->conn->query($sql);
    }
}