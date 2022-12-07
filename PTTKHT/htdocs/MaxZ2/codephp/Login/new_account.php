<?php include_once "../users/Templates/Home/head.php" ?>
<form action="new_account.php" class="Form" method="post">
    <div class="Form_container">
        <h1 style="color : red">Đăng kí</h1>
        <label for="">Họ tên : </label>
        <input type="text" name="hoten">
        <label for="">Tài khoản : </label>
        <input type="text" name="account">
        <label for="">password : </label>
        <input type="text" name="pass">

        <div class="submit">
        <input type="submit" name="submit">
        </div>
    </div>
    </div>
</form>

<?php
    $con = new mysqli("localhost",'root','','news');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $hoten = $_POST['hoten'];
        $account = $_POST['account'];
        $pass = $_POST['pass'];
        $sql = "INSERT INTO login(hoten,account,pass) VALUE('$hoten','$account','$pass')";
        $rs = $con->query($sql);
        if($rs==true){
            header("Location:../Login/login.php");
        }
        else{
            header("Location:../Login/new_account.php");
        }
    }


?>


<style>

    .column{
        width : 85%;
        float : right;
    }
    .Form{
    background-color: antiquewhite;
    width : 500px;
    height : 400px;
    margin: auto;
    border : 1px solid black;
    border-radius: 15px;
    position: relative;
    margin-top: 140px;
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
    background-color: white; /* Green */
    border: 2px solid #4CAF50;
    color: #4CAF50;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}

input[type="submit"]:hover{
    background-color: #4CAF50;
    color: white;
}



</style>