<?php

class Model{
    var $con;
    public function __construct()
    {
        $this->con  = new mysqli("localhost","root","","news");
    }
    public function news()
    {
        // Thuc hien cau truy van 
        $sql = "SELECT * FROM huy";
        $results = [];
      
        $rs = $this->con->query($sql); 
        while($row = $rs->fetch_assoc()){
        $results[] = $row;
        }
       
        return $results;
    }

    public function products()
    {
        $sql = "SELECT * FROM products";
        $results = [];
      
        $rs = $this->con->query($sql); 
        while($row = $rs->fetch_assoc()){
        $results[] = $row;
        }
        return $results;
    }
    
}

?>