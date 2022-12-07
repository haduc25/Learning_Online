<?php
require_once "Views/View.php";
class View3 extends View
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index(array $data)
	{
		include "Templates/".$this->temp."/product/index.php";
	}
	public function edit(array $row)
	{
		include "Templates/".$this->temp."/product/edit.php";
	}
}
?>