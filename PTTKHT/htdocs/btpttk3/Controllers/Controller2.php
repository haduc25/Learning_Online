<?php
require_once "Models/Model3.php";
require_once "Views/View3.php";

class Controller2
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new Model3();
        $this->view = new View3();
    }

    public function index()
    {
        $data = $this->model->getProducts();
        $this->view->index($data);
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $row = $this->model->conn
            ->query("SELECT * FROM products WHERE id='".$id."'")
            ->fetch_assoc();

        $this->view->edit($row);
    }

    public function save()
    {
        $form = [];
        $form['id'] = $_REQUEST['id'];
        $form['title'] = $_REQUEST['title'];
        $form['price'] = $_REQUEST['price'];
        $rs = $this->model->save($form);
        if($rs == true){
            header('Location: ?controller=product&task=index&n=success');
        }else{
            header('Location: ?controller=product&task=index&n=unsuccess');
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $rs = $this->model->delete($id);
        if($rs == true){
            header('Location: ?controller=product&task=index&n=success');
        }else{
            header('Location: ?controller=product&task=index&n=unsuccess');
        }
    }

}