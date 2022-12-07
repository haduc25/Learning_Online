<?php
require_once "Controller.php";
    $task = $_REQUEST['task'];
    $con = new Controller();
    $con->$task();

?>