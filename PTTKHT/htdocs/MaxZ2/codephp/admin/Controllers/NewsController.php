<?php
require_once "Models/NewsModel.php";
require_once "./Views/NewsView.php";
class NewsController{
    var $model;
    var $view;
    public function __construct()
    {
        $this->model = new NewsModel();
        $this->view = new NewsView();
    }
    

    public function Home()
    {
        # code...
        $news = $this->model->index();
        $this->view->Home($news);
    }

    // hien thi danh sach
    public function index()
    {
        $news = $this->model->index();
        $this->view->indexNews($news);
    }

    // them danh sach
    public function createForm()
    {
        $this->view->createForm();
    }

    public function store()
    {
        $form = [];
        $form['title'] = $_REQUEST['title'];
        $form['content'] = $_REQUEST['content'];
        $rs = $this->model->storeNews($form);
        if($rs == true){
            header("Location:?task=index&controller=news");
        }
    }

    // xoa danh sach
    public function delete()
    {
        $id = $_REQUEST['id'];
        $rs = $this->model->deleteNews($id);
        if($rs == true){
            header('Location: ?task=index&controller=news');
        }

    }

    // sua danh sach
    public function update(){
        $id = $_REQUEST['id'];
        $row = $this->model->update($id);
        $this->view->FormUpdate($row);
    }

    public function SaveNews()
    {
        $form = [];
        $form['id'] = $_REQUEST['id'];
        $form['title'] = $_REQUEST['title'];
        $form['content'] = $_REQUEST['content'];
        $rs = $this->model->Save($form);
        //var_dump($rs);exit;
        if($rs == true){
            header("Location:?task=index&controller=news");
        }
    }
}


?>