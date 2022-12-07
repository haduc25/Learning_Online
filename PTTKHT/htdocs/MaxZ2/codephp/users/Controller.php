<?php
require_once "Model.php";
require_once "View.php";
class Controller{
    var $model;
    var $view;
    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }

    public function Home()
    {
        $this->view->Home();
    }

    public function News()
    {
        $news = $this->model->news();
        $this->view->ViewNews($news);
    }

    public function Products()
    {
        $product = $this->model->products();
        $this->view->ViewProducts($product);
    }
}

?>