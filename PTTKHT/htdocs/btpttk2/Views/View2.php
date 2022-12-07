<?php
require_once "Views/View.php";
class View2 extends View //ke thua
{
	public function __construct()
	{
		parent::__construct();
	}
	public function indexNews($rs,$n)
	{
		include "Templates/".$this->temp."/news/pageIndex.php";
	}
	public function renderFormNews()
	{
		require_once "Templates/".$this->temp."/news/create.php"; //get
	}
	public function editForm(array $row)
	{
		include "Template/".$this->temp."/news/edit.php";
	}
}
?>