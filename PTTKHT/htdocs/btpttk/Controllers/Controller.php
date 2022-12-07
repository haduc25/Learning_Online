<?php
require_once "Models\Model2.php";
require_once "Views\View2.php";
class Controller
{   var $model;
    var $view;
	public function __construct()
	{
        $this->model = new Model2();
        $this->view = new View2();
	}
    /*
	public function getNews()
	{
		$model = new Model();
		$save_model = $model->getNews_controller(); 
		//echo "<br>Hien DS tin tuc<br>";
		//hien thi
		$v = new view();
		$v->indexNews($save_model); //truyen dl model->view
	}
    */
    public function index()
    {
        $n = @$_REQUEST['n'];
        $rs = $this->model->getNews_controller();
        $this->view->indexNews($rs,$n);
    }
    public function createNews()
    {
        $this->view->renderFormNews();
    }
    public function storeNews()
    {
    	$form = [];
    	$form['title'] = $_REQUEST['title'];
    	$form['content'] = $_REQUEST['content'];
    	$rs = $this->model->storeNews($form);
    	if ($rs == true)
    	{
    		header('Location: ?controller=news&task=index&n=success');
    	}else
        {
            header('Location: ?controller=news&task=index&n=unsuccess');
        }
		
    }
    public function delete()
    {
        $id = $_REQUEST['id'];
        $rs = $this->model->deleteNews($id);
        if($rs == true){
            header('Location: ?task=getNews&n=success');
        }else
        {
            header('Location: ?task=getNews&n=unsuccess');
        }
    }
        /*
    public function update()
    {
        $id = $_REQUEST['id'];
        $row = $this->model->getSingleNews($id);
        $this->view->editForm($row);   
    }
    public function save()
    {
        $form = [];
        $form['id'] = $_REQUEST['id'];
        $form['title'] = $_REQUEST['title'];
        $form['content'] = $_REQUEST['content'];
        $rs = $this->model->saveNews($form);
        //var_dump($rs);exit;
        if($rs == true){
            header('Location: ?task=getNews&n=success');
        }else{
            header('Location: ?task=getNews&n=unsuccess');
        }
    }*/
}