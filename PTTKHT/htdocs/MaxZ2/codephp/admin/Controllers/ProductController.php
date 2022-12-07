<?php
require_once "Models/ProductModel.php";
require_once "./Views/ProductView.php";
class ProductController{
    var $model;
    var $view;
    public function __construct()
    {
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }
    

    public function Home()
    {
        # code...
        $Product = $this->model->index();
        $this->view->Home($Product);
    }
    public function Home1()
    {
        # code...
        $Product = $this->model->index1();
        $this->view->Home1($Product);
    }
    public function Home2()
    {
        # code...
        $Product = $this->model->index2();
        $this->view->Home2($Product);
    }

    public function Home3()
    {
        # code...
        $Product = $this->model->index3();
        $this->view->Home3($Product);
    }

    public function Home4()
    {
        # code...
        $Product = $this->model->index4();
        $this->view->Home4($Product);
    }

    // hien thi danh sach
    public function index()
    {
        $Product = $this->model->index();
        $Product1 = $this->model->index1();
        $Product2 = $this->model->index2();
        $Product3 = $this->model->index3();
        $Product4 = $this->model->index4();
        $this->view->indexProduct($Product1,$Product,$Product2,$Product3,$Product4);
    }

//_______________________________________________________

    // them danh sach
    public function createForm()
    {
        $this->view->createForm();
    }

    public function store()
    {   
        $form = [];
        
        $form['tensp'] = $_REQUEST['tensp'];
        $form['gia'] = $_REQUEST['gia'];
        $form['image'] = $_FILES['file']['name'];
        $form['products'] = $_REQUEST['products'];
        $rs = $this->model->storeProduct($form);
        if($rs == true){
            header("Location:?task=Home&controller=product");
        }
    }

    // xoa danh sach
    public function delete()
    {
        $id = $_REQUEST['id'];
        $rs = $this->model->deleteProduct($id);
        if($rs == true){
            header('Location: ?task=Home&controller=product');
        }

    }
    public function delete1()
    {
        $id = $_REQUEST['id'];
        $rs = $this->model->deleteProduct1($id);
        if($rs == true){
            header('Location: ?task=Home1&controller=product');
        }

    }

    public function delete2()
    {
        $id = $_REQUEST['id'];
        $rs = $this->model->deleteProduct2($id);
        if($rs == true){
            header('Location: ?task=Home2&controller=product');
        }

    }

    public function delete3()
    {
        $id = $_REQUEST['id'];
        $rs = $this->model->deleteProduct3($id);
        if($rs == true){
            header('Location: ?task=Home3&controller=product');
        }

    }

    public function delete4()
    {
        $id = $_REQUEST['id'];
        $rs = $this->model->deleteProduct4($id);
        if($rs == true){
            header('Location: ?task=Home4&controller=product');
        }

    }

    // sua danh sach
    public function update(){
        $id = $_REQUEST['id'];
        $row = $this->model->update($id);
        $this->view->FormUpdate($row);
    }

    public function update1(){
        $id = $_REQUEST['id'];
        $row = $this->model->update1($id);
        $this->view->FormUpdate($row);
    }

    public function update2(){
        $id = $_REQUEST['id'];
        $row = $this->model->update2($id);
        $this->view->FormUpdate($row);
    }


    public function update3(){
        $id = $_REQUEST['id'];
        $row = $this->model->update3($id);
        $this->view->FormUpdate($row);
    }

    public function update4(){
        $id = $_REQUEST['id'];
        $row = $this->model->update4($id);
        $this->view->FormUpdate($row);
    }

    // --------------------
    public function SaveProduct()
    {
        $form = [];
        $form['id'] = $_REQUEST['id'];
        $form['tensp'] = $_REQUEST['tensp'];
        $form['gia'] = $_REQUEST['gia'];
        $rs = $this->model->Save($form);
        //var_dump($rs);exit;
        if($rs == true){
            header("Location:?task=Home&controller=product");
        }
    }
}


?>