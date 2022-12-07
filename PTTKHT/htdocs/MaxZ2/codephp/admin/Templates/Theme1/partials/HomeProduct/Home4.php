
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
        <?php include_once "./Templates/Theme1/partials/HomeProduct/Head.php" ?>
        <div class="column">
            <div class="container">
            <h3>Sản Phẩm</h3>
            <ul class="nav nav-tabs">
                <li><a href="index.php?task=Home&controller=product">Home</a></li>
                <li><a href="index.php?task=Home1&controller=product">Quần áo</a></li>
                <li><a href="index.php?task=Home2&controller=product">Điện thoại</a></li>
                <li ><a href="index.php?task=Home3&controller=product">Laptop</a></li>
                <li class="active"><a href="index.php?task=Home4&controller=product">Mẹ & bé</a></li>
            </ul>
            
        </div>
        <?php foreach($Product as $n) :?>

        <ul class="product">
            <li class="sub-pro">
                <h3><?php echo $n['tensp']  ?> </h3>
                <img src="../images/<?php echo $n['image'] ?>" alt="">
                <p>Giá : <?php echo $n['gia']  ?></p>
        </li>
        </ul>

<?php endforeach  ?>
        </div>
        
</body>
</html>
<style>
    
    .column{
        width : 85%;
        float : right;
        background-color: white;
        padding-left: 20px;
    }
    img{
    width : 150px;
    height : 150px;
}
.product{
    background-color: antiquewhite;
    margin-top : 20px;
    margin-left: 20px ;
    display: inline-block;
    padding : 0 20px;
    border-radius: 12px;
    border: 1px solid black;
    
}
.sub-pro{
    padding : 12px 10px;
}
.sub-pro>h3{
    color : red;
    margin : 5px 0;
    text-align: center;
}
</style>