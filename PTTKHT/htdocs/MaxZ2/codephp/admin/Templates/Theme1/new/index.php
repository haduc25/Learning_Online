<?php include_once "./Templates/Theme1/partials/HomeNews/Head.php"; ?>
<style>

    .column{
        width : 85%;
        float : right;
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
</style>
<div class="column">

<table border="1">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Content</td>
        <td>Tools</td>
    </tr>
    <?php foreach($news as $n) :?>
    <tr>
        <td><?php echo $n['id']  ?></td>
        <td><?php echo $n['title']  ?></td>
        <td><?php echo $n['content']  ?></td>
        <td>
            <a href="?task=delete&controller=news&id=<?php echo $n['id'] ?>">Delete</a>
            <a href="?task=update&controller=news&id=<?php echo $n['id'] ?>"> | Update</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
</div>