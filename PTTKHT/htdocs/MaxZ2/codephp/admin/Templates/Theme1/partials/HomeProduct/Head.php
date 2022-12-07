
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

 <!--   <div class="row"> -->
        
        <div class="right-column">
            <div id="sidebar">
                    <ul>
                        <li><a href="?task=Home&controller=news">Quản lí tin tức </a></li>
                        <li><a href="?task=Home&controller=product">Quản lí sản phẩm</a></li>
                    </ul>
                </div>
            </div>
    <div class="left-column">
            <div class="topnav">
            <a href="?task=Home&controller=product">Trang chủ</a>
            <a href="?task=index&controller=product">Danh sách sản phẩm</a>
            <a href="?task=createForm&controller=product">Thêm sản phẩm</a>
            
            </div>
        </div>
     </div>

</body>
</html>

<style>
:root{
    --main-color : #027581;
    --color-dark:   #1D2231;
    --text-grey : #8390A2;
}

*{
    font-family: sans-serif;
    margin: 0;
    padding : 0;
    text-decoration: none;
    list-style-type: none;
    box-sizing: border-box;
}

/*          Sidebar         */
#sidebar{
    position: fixed;
    width: 200px;
    height: 100%;
    background-color: #027581;
    left : 0px;
}
#sidebar ul li a{
    color: rgba(230,230,230,0.9);
    text-decoration: none;
    list-style-type: none;
    padding : 15px 10px;
    box-sizing: border-box;
}


#sidebar ul li{
    list-style-type: none;
    padding : 15px 10px;
    border-bottom: 1px solid rgba(100,100,100,0.3);
}

#sidebar .toggle-btn{
    position: absolute;
    left : 210px;
    top : 20px;
}

#sidebar .toggle-btn span{
    display: block;
    width : 20px;
    height : 2px;
    background: #151719;
    margin: 5px 0px;
}


/* Chia cot     */
/* 
.row{
    background-color: #f1f1f1;
}*/
.left-column{
    float: right;
    width : 85%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

.card{
    background-color: white;
    padding :20px;
    margin-top: 20px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
  }
  

.right-column{
    float: left;
    width : 15%;
    padding-left: 20px;
    background-color: #f1f1f1;
}

.right-column>.card{
    background-color: #f1f1f1;
}

/*      menu    */
.topnav{
    background-color: #333;
    height : 50px;
    top : 0;
}
.topnav a{
    padding : 0px 20px;
    display:block;
    line-height: 50px;
    float:left ; 
    color : white; 
    text-decoration: none;
}
.topnav>a:hover{
    background-color: #027581;
    color : white;
}
</style>