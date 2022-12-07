<?php

class Model{
    // 1,  Ket noi toi co so du lieu
    public function getNews(){
        $conn = new mysqli('localhost','root','','news');
        if($conn->connect_error){
            die("Connected failed : ".$conn->connect_error);
        }
        
        // 2 . Thuc hien cau truy van 
        $query = "SELECT * FROM news";
        $news = [];
        // 3. thuc hien truy van 
        $result = $conn->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $news[] = $row;
            }
        }
        return $news;
    }
}