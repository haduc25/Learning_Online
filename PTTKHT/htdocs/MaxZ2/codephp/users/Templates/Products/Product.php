<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<style>
    .banner{
        padding : 12px 12px;
    }
</style>
<body>
    <?php include_once "../users/Templates/Home/head.php" ?>
    <div class="banner">
        <div class="card">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

    <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="https://www.uplevo.com/img/designbox/thiet-ke-banner-anh-quang-cao.png" alt="Los Angeles" style="width:100%; height : 440px">
            </div>

            <div class="item">
              <img src="https://png.pngtree.com/thumb_back/fh260/back_our/20190623/ourmid/pngtree-summer-outdoor-scene-banner-image_249780.jpg" alt="Chicago" style="width:100%;height : 440px">
            </div>
          
            <div class="item">
              <img src="http://datadesignsb.com/wp-content/uploads/2019/09/thiet-ke-do-hoa-hinh-anh.jpg" alt="New york" style="width:100%;height : 440px">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>

    </div>
    <div class="container">
        <h1>Tất cả sản phẩm</h1>   
        <div class="row">
            <?php foreach($product as $n)  :?>
            <div class="col-sm-3" style="margin-top : 30px">
            
                <div class="sub-product">
                <h3><?php echo $n['tensp']  ?> </h3>
                <img src="../admin/images/<?php echo $n['image'] ?>" alt="">
                <p>Giá : <?php echo $n['gia']  ?></p>
                <input type="submit" value="Đặt mua">
                </div>
            
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>

<style>
    h1{
        text-align: center;
        color : red;
    }
    
    .sub-product{
        padding : 5px 20px;
        border: 1px solid silver;
        margin : auto;
        background-color: antiquewhite;
        border-radius: 20px;
        flex-grow: 2;
    }
    .sub-product>img{
        width : 150px;
        height : 150px;
    }
</style>