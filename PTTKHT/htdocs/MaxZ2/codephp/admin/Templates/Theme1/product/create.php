
<style>
input[type="submit"]{
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
input[type=submit]:hover {
    background-color: #45a049;
}
.Form{
    background-color: antiquewhite;
    width : 500px;
    height : 200px;
    margin: auto;
    border : 1px solid black;
    border-radius: 15px;
    position: relative;
}

input[type="text"]{
    width : 100%;
    margin-bottom: 12px;
}

.Form_container{
    padding : 15px 20px;
    display :block;
}

#comment{
    width : 100%;
    height : 80px;
}
.comment{
    margin-top : 12px;
}
#country{
    width : 100%;
    padding : 3px 10px;
}

.seclect_country{
    margin-top: 12px;
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
.row{
    margin-top: 20px;
    width : 85%;
    float: right;
}
</style>
    <?php include_once "./Templates/Theme1/partials/HomeProduct/Head.php" ?>
    <div class="row">
    <form method="post"  class="Form" action="index.php?task=store&controller=product" enctype="multipart/form-data">
        <div class="Form_container">
            <label for="tensp">Tên sản phẩm</label>
            <input type="text" name="tensp"><br>
            <label for="gia">Giá</label>
            <input type="text" name="gia"><br>
            <label for="products">Danh mục</label>
                <select id="products" name="products">
                    <option  value="quanao">Quần áo</option>
                    <option  value="dienthoai">Điện thoại</option>
                    <option  value="laptop">Laptop</option>
                    <option  value="mevabe">Mẹ & bé</option>
                </select>
            <input type="file" name="file" id="fileUpload">
        </div>
        
        <div class="submit">
            <input type="submit" value="Thêm">
        </div>
        </div>
    </form>
</div>