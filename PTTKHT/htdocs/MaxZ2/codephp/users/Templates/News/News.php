<head>
    <title>Tin tức</title>
</head>
<?php include_once "./Templates/Home/head.php" ?>
<body>
    <div class="content">
    <div class="left-content">
        <div class="card">
            <ul class="sb_menu">
                <li><a href="#" id="dmsp">DANH MỤC SẢN PHẨM</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </div>
    <div class="right-content">
        <div class="card">
            <?php include_once "./Templates/Patials/news.php" ?>
        </div>
    </div>        
</body>
<style>
    /*    duoi menu */
.content{
    background-color: #f1f1f1;
    height : 300px;
}

.left-content{
    width : 20%;
    padding-left: 20px;
    background-color: #f1f1f1;
    float : left;
}

.card{
    background-color: white;
    padding : 20px;
    margin-top : 20px;
}
.content:after {
    content: "";
    display: table;
    clear: both;
}

.right-content{
    width : 80%;
    float : left;
    padding-left: 20px;
    background-color: #f1f1f1;
}
/* Sidebar */
.sb_menu{
    padding : 0;
    margin : 0;
    list-style-type: none;
    
}

.sb_menu>li>a{
    text-decoration: none   ;
    display: block;
    background-color: antiquewhite;
    max-width: 200px;
    padding : 12px 20px;
}

.sidebar{
    margin-top:20px;
}

li a#dmsp{
    background-color: rgb(51, 189, 51);
    color : white;
}

.sb_menu>li>a:hover:not(#dmsp){
    background-color: aqua;
    color : white;
}

</style>