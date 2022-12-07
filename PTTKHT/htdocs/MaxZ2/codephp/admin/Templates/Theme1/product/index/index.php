<?php include_once "./Templates/Theme1/partials/HomeProduct/Head.php"; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    .container>ul{
        margin-left: 10px;
    }
    .column{
        width : 85%;
        float : right;
        margin-top : 20px;
    }
    table, tr, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    tr,td{
        padding: 15px;
    }
    table{
    
    width:90%;    
    background-color: antiquewhite;
    margin : 50px 20px ;

    }
    img{
    width : 150px;
    height : 150px;
}
</style>

<div class="column">
<div class="container">
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
    <li><a data-toggle="pill" href="#menu1">Quần áo</a></li>
    <li><a data-toggle="pill" href="#menu2">Điện thoại</a></li>
    <li><a data-toggle="pill" href="#menu3">Laptop</a></li>
    <li><a data-toggle="pill" href="#menu4">Mẹ & bé</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
      <table border="1">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Giá</td>
        <td>Ảnh</td>
        <td>Tools</td>
    </tr>
    <?php foreach($Product as $n) :?>
    <tr>
        <td><?php echo $n['id']  ?></td>
        <td><?php echo $n['tensp']  ?></td>
        <td><?php echo $n['gia'] ?></td>
        <td><img src="../images/<?php echo $n['image'] ?>" alt="day la danh san pham"></td>
        
        <td>
            <a href="?task=delete&controller=product&id=<?php echo $n['id'] ?>">Delete</a>
            <a href="?task=update&controller=product&id=<?php echo $n['id'] ?>"> | Update</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
    </div>
    <div id="menu1" class="tab-pane fade">
    <table border="1">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Giá</td>
        <td>Ảnh</td>
        <td>Tools</td>
    </tr>
    <?php foreach($Product1 as $n) :?>
    <tr>
        <td><?php echo $n['id']  ?></td>
        <td><?php echo $n['tensp']  ?></td>
        <td><?php echo $n['gia'] ?></td>
        <td><img src="../images/<?php echo $n['image'] ?>" alt="day la danh san pham"></td>
        
        <td>
            <a href="?task=delete1&controller=product&id=<?php echo $n['id'] ?>">Delete</a>
            <a href="?task=update1&controller=product&id=<?php echo $n['id'] ?>"> | Update</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
    </div>

    <!-- điện thoại -->
    <div id="menu2" class="tab-pane fade">
        <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Ảnh</td>
            <td>Tools</td>
        </tr>
        <?php foreach($Product2 as $n) :?>
        <tr>
            <td><?php echo $n['id']  ?></td>
            <td><?php echo $n['tensp']  ?></td>
            <td><?php echo $n['gia'] ?></td>
            <td><img src="../images/<?php echo $n['image'] ?>" alt="day la danh san pham"></td>
            <td>
                <a href="?task=delete2&controller=product&id=<?php echo $n['id'] ?>">Delete</a>
                <a href="?task=update2&controller=product&id=<?php echo $n['id'] ?>"> | Update</a>
            </td>
        </tr>
        
    <?php endforeach ?>
    </table>
    </div>
    <!-- Laptop -->
    <div id="menu3" class="tab-pane fade">
        <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Ảnh</td>
            <td>Tools</td>
        </tr>
        <?php foreach($Product3 as $n) :?>
        <tr>
            <td><?php echo $n['id']  ?></td>
            <td><?php echo $n['tensp']  ?></td>
            <td><?php echo $n['gia'] ?></td>
            <td><img src="../images/<?php echo $n['image'] ?>" alt="day la danh san pham"></td>
            <td>
                <a href="?task=delete3&controller=product&id=<?php echo $n['id'] ?>">Delete</a>
                <a href="?task=update3&controller=product&id=<?php echo $n['id'] ?>"> | Update</a>
            </td>
        </tr>
        
    <?php endforeach ?>
    </table>
    </div>
    
    <!-- Mẹ và bé -->

    <div id="menu4" class="tab-pane fade">
        <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Ảnh</td>
            <td>Tools</td>
        </tr>
        <?php foreach($Product4 as $n) :?>
        <tr>
            <td><?php echo $n['id']  ?></td>
            <td><?php echo $n['tensp']  ?></td>
            <td><?php echo $n['gia'] ?></td>
            <td><img src="../images/<?php echo $n['image'] ?>" alt="day la danh san pham"></td>
            <td>
                <a href="?task=delete4&controller=product&id=<?php echo $n['id'] ?>">Delete</a>
                <a href="?task=update4&controller=product&id=<?php echo $n['id'] ?>"> | Update</a>
            </td>
        </tr>
        
    <?php endforeach ?>
    </table>
    </div>

  </div>
  
</div>
</div>