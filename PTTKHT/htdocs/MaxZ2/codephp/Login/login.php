<?php include_once "../users/Templates/Home/head.php" ?>
<head>
    <title>Đăng nhập</title>
</head>
<div class="column">
<form action="login.php" class="Form" method="post">
    <div class="Form_container">
    <h1 style="color : red">Login</h1>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="hoten" placeholder="Tên đăng nhập">
        </div>
        <div class="input-group">
            <span class="input-group-addon">Tài khoản</span>
            <input id="msg" type="text" class="form-control" name="account" placeholder="">
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <div class="submit">
        <input type="submit" name="submit">
        </div>
    </div>
    </div>
</form>
</div>
<?php
    $NAME = "Huy";
    $ACCOUNT_NAME = "Huyhuy";
    $Paswd = "12345";
    //$Paswd = md5($Paswd);
    $con = new mysqli("localhost",'root','','news');
    $error;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $hoten = $_POST['hoten'];
        $account = $_POST['account'];
        $pass = $_POST['pass'];
        if($hoten==$NAME && $account==$ACCOUNT_NAME && $pass==$Paswd){
            header("Location:../admin/index.php/?task=Home&controller=news");
        }
        
        else{
            
            $sql = "SELECT * FROM login WHERE hoten='$hoten' && account='$account' && pass='$pass'";
            $results;
            $rs = $con->query($sql);
            while($row = $rs->fetch_assoc()){
                $results=$row;     
            }
            //var_dump($results);exit;
            if($results != NULL){
                echo "<script> alert('Bạn đã đăng nhập thành công') </script>";
                header("Location:../users/index.php?task=Home");
                
            }
            else{
                echo "<script> alert('Bạn đã đăng nhập Thất baị') </script>";
                header("Location:../Login/login.php");
                
            }
            
        } 
         // header("Location:../users/index.php?task=Home");
    }


?>

<style>

    .column{
        font-size : 20px; 
    }
    .Form{
    background-color: antiquewhite;
    width : 500px;
    height : 320px;
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
    font-size: 20px;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 20px;
}
.Form_container>input[type="text"]{
    border-radius: 12px;
    border : 1px solid black;
}
input[type="submit"]:hover{
    background-color: #4CAF50;
    color: white;
}

.input-group{
    padding : 5px 0px;
}



</style>