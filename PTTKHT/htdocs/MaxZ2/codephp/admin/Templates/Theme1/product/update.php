<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include_once "./Templates/Theme1/partials/HomeProduct/Head.php"; ?>
<body>
<div class="column">

    <form action="index.php?task=Saveproduct&controller=product" class="Form" method="post">
    <div class="Form_container">

        <label for="id">ID  : <?php $row['id'] ?></label>    
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>"><br>
        <label for="tensp">Tên sản phẩm</label>
        <input type="text" name="tensp" value="<?php echo $row['tensp'] ?>"><br>
        <label for="gia">Giá</label>
        <input type="text" name="gia" value="<?php echo $row['gia'] ?>"><br>
        <input type="submit" value="Lưu tin">
    </form>
    </div>
</div>
</body>
</html>





<style>

    .column{
        width : 85%;
        float : right;
    }
    .Form{
    background-color: antiquewhite;
    width : 500px;
    height : 200px;
    margin: auto;
    border : 1px solid black;
    border-radius: 15px;
    position: relative;
    margin-top: 40px;
}

input[type="text"]{
    width : 100%;
    margin-bottom: 12px;
}

input[type="file"]{
    padding : 5px 12px;
}

.fileUpload{
    padding : 12px;
    height: 29px;
    width: 70px;
    margin : auto;   
}

.Form_container{
    padding : 15px 20px;
    display :block;
}

.submit{
    padding : 12px;
    height: 29px;
    width: 70px;
    margin : auto;   
}
input[type="submit"]{
    padding : 5px 12px;
}
</style>
