<?php

class Model
{
    var $con;
    public function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "news");
    }

}


?>