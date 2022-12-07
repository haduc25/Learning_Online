<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
    <div class="content">
      <div class="left-content">
          <div class="card">
              <ul class="sb_menu">
                  <li><a href="#" id="dmsp">DANH MỤC SẢN PHẨM</a></li>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Quần áo</a></li>
                  <li><a href="#">Điện thoại</a></li>
                  <li><a href="#">Laptop</a></li>
                  <li><a href="#">Mẹ & bé</a></li>
              </ul>
          </div>
      </div>
    <div class="right-content">
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
        </div>
    </div>        
</body>
</html>
<style>
    /*    duoi menu */
.content{
    background-color: #f1f1f1;
    height : 300px;
}

.left-content{
    width : 20%;
    padding-left: 20px;
    background-color: #f1f1f1;
    float : left;
}

.card{
    background-color: white;
    padding : 20px;
    margin-top :50px;
}
.content:after {
    content: "";
    display: table;
    clear: both;
}

.right-content{
    width : 80%;
    float : left;
    padding-left: 20px;
    background-color: #f1f1f1;
}
/* Sidebar */
.sb_menu{
    padding : 0;
    margin : 0;
    list-style-type: none;
    
}

.sb_menu>li>a{
    text-decoration: none   ;
    display: block;
    background-color: antiquewhite;
    max-width: 200px;
    padding : 12px 20px;
}

.sidebar{
    margin-top:20px;
}

li a#dmsp{
    background-color: rgb(51, 189, 51);
    color : white;
}

.sb_menu>li>a:hover:not(#dmsp){
    background-color: aqua;
    color : white;
}

</style>