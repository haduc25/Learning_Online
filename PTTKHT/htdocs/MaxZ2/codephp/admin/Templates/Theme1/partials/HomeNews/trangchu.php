<style>
.img{
    width : 100%;
    height : 200px;
    background-color: #aaa;
    text-align: center;
}

</style>

<?php foreach($news as $n) :?>

<h2 style="margin-top : 20px;"><?php echo $n['title']  ?> </h2>
<h5>Title description, Dec 7, 2017</h5>
<div class="img">Image</div>
<p>Some text..</p>
<p><?php echo $n['content']  ?></p>

<?php endforeach  ?>

