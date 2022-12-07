<?php
require_once "./Models/Model.php";
class NewsModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sql = "SELECT * FROM huy";
        $rs = $this->con->query($sql);
        $results = [];
        while($row = $rs->fetch_assoc()){
            $results[] = $row;
        }
        return $results;
    }

    public function storeNews($form)
    {
        $sql = "INSERT INTO huy(title,content) VALUES('".$form['title']."','".$form['content']."')";
        $rs = $this->con->query($sql);
        return $rs;
    }
    public function deleteNews($id)
    {

        $sql ="DELETE FROM huy WHERE id='".$id."'";
        return $this->con->query($sql);
    }

    public function update($id)
    {
        $sql = "SELECT * FROM huy WHERE id  = '".$id."'";
        $rs = $this->con->query($sql);
        return $rs->fetch_assoc(); // lay du lieu ra
    }

    public function Save($form)
    {
        $sql = "UPDATE huy SET title = '".$form['title']."', content = '".$form['content']."' , id = '".$form['id']."'  WHERE id ='".$form['id']."'";
        return $this->con->query($sql);
    }

}


?>