<?php
require_once "./Views/View.php";
class NewsView extends View{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexNews($news)
    {
        include_once "./Templates/".$this->template."/new/index.php";
    }

    public function createForm()
    {
        include_once "./Templates/".$this->template."/new/create.php";
    }
    
    public function FormUpdate($row)
    {
        include_once "./Templates/".$this->template."/new/update.php";
    }

    public function Home($news)
    {
        # code...
        include_once "./Templates/".$this->template."/partials/HomeNews/Home.php";
    }
}

?>