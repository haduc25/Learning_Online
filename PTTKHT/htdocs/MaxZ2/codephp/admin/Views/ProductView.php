<?php
require_once "./Views/View.php";
class ProductView extends View{

    public function __construct()
    {
        parent::__construct();
    }
    /* ______________________index __________________ */
    public function indexProduct($Product1,$Product,$Product2,$Product3,$Product4)
    {
        include_once "./Templates/".$this->template."/product/index/index.php";
    }

    public function indexProduct1($Product)
    {
        include_once "./Templates/".$this->template."/product/index/index1.php";
    }

    public function indexProduct2($Product)
    {
        include_once "./Templates/".$this->template."/product/index/index2.php";
    }
    public function indexProduct3($Product)
    {
        include_once "./Templates/".$this->template."/product/index/index3.php";
    }
    public function indexProduct4($Product)
    {
        include_once "./Templates/".$this->template."/product/index/index4.php";
    }
    /*_________________________________________________________ */
    public function createForm()
    {
        include_once "./Templates/".$this->template."/product/create.php";
    }
    
    public function FormUpdate($row)
    {
        include_once "./Templates/".$this->template."/product/update.php";
    }


    /*_________________HOME PRODUCT ________________________ */
    public function Home($Product)
    {
        # code...
        include_once "./Templates/".$this->template."/partials/HomeProduct/Home.php";
    }

    public function Home1($Product)
    {
        # code...
        include_once "./Templates/".$this->template."/partials/HomeProduct/Home1.php";
    }
    
    public function Home2($Product)
    {
        # code...
        include_once "./Templates/".$this->template."/partials/HomeProduct/Home2.php";
    }

    public function Home3($Product)
    {
        # code...
        include_once "./Templates/".$this->template."/partials/HomeProduct/Home3.php";
    }

    public function Home4($Product)
    {
        # code...
        include_once "./Templates/".$this->template."/partials/HomeProduct/Home4.php";
    }

    /*______________________________________________________________________________ */
}

?>