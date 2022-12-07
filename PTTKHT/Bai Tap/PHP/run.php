<?php
include "Controller.php";

$task = $_REQUEST['task'];

$con = new Controller();
if($task=="getNews"){
    $con->getNews();
}
