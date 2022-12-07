<?php

class View{
    public function Home()
    {
        include_once "./Templates/Home/Home.php";
    }

    public function ViewNews($news)
    {   
        include_once "./Templates/News/News.php";
    }

    public function ViewProducts($product)
    {
        include_once "./Templates/Products/Product.php";
    }
}

?>