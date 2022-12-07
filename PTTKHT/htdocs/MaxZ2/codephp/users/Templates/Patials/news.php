<table>
    <h2>Tin tức </h2>
    <?php foreach($news as $n) :?>
    
    <ul>
        <div class="card">
        <li><h3><?php echo $n['title'] ?></h3></li>
        <li><?php echo $n['content'] ?></li>
    </div>
    </ul>
    
    <?php endforeach ?>
</table>

<style>
    ul{
        display: inline-block;
    }
    ul li{
    list-style-type: none;
    }
    .card{
        background-color: silver;
        padding : 10px 10px;
        
    }
</style>