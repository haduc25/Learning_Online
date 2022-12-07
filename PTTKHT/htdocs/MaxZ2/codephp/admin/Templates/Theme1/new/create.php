
<?php include_once "./Templates/Theme1/partials/HomeNews/Head.php"; ?>


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

<div class="column">
<form action="index.php?task=store&controller=news" class="Form" method="post">
    <div class="Form_container">
    <label for="title">Title</label>
    <input type="text" name="title"><br>
    <label for="content">Content</label>
    <input type="text" name="content"><br>
    <div class="submit">
    <input type="submit" value="Thêm">
    </div>
    </div>
</form>
</div>