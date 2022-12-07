<?php
require_once "Controllers\Controller.php";//add library
require_once "Models\Model.php";
$task = $_REQUEST['task'];
$con = new Controller();//created new controller
$mod = new Model();
if($task == "getNews")// if user need info
{
	$con->index();
}else if($task == "createNews")
{
	$con->createNews();
}else if($task == "storeNews")
{
	$con->storeNews();
}
else if($task == "addNews")
{
	$mod->addNews();
}
/*
require_once "Controllers\Controller.php";//add library
$task = $_REQUEST['task'];
$controller = $_REQUEST['controller'];
$con = new Controller();
$con->$task();
*/
?>