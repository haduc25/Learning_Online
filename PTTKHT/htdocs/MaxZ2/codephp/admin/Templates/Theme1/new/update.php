<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?task=SaveNews&controller=news" method="post">
        <label for="id">ID      <?php echo $row['id'] ?></label>    
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>"><br>
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo $row['title'] ?>"><br>
        <label for="content">Content</label>
        <input type="text" name="content" value="<?php echo $row['content'] ?>"><br>
        <input type="submit" value="Lưu tin">
    </form>
</body>
</html>