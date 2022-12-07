
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<script src="bootstrap/js/bootstrap.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../users/index.php?task=Home">Shop nhóm 2</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="../users/index.php?task=Home">Home</a></li>
      <li class=""><a  href="../users/index.php?task=News">Tin tức</span></a>
        <!-- <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul> -->
      </li>
      <li><a href="../users/index.php?task=Products">Sản phẩm</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../Login/login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="../Login/new_account.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search" style="width : 320px">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
  
</body>
</html>

<style>
    .navbar-nav>li:hover{
        background-color: red;
    }
    
    .navbar-nav{
        margin-left : 30px ;
    }

    
</style>



