<?php
// require_once "./Controllers/NewsController.php";
//     $task = $_REQUEST['task'];
//     $con = new NewsController();
//     $con->$task();
    $task = $_REQUEST['task'];
    $controller = $_REQUEST['controller'];
    $conName = ucfirst($controller)."Controller";
    require_once "Controllers/".$conName.".php";
    $con = new $conName();
    $con->$task();
?>