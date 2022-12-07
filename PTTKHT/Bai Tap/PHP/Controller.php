<?php
require_once "Model.php";
require_once  "View.php";

class Controller
{
    public function getNews(){
        //1. bao model lay du lieu $news
        $m = new Model();
        $news = $m->getNews();

        //2. bao view hien thi ra cho nguoi dung
        $v = new View();
        $v->indexNews($news);
    }
}