<?php
require_once "Templates/Theme1/partials/menu.php";
require_once "Templates/Theme1/partials/info.php"
/*
<form action "Insert.php" method="post">
	_Title_: 
	<input type="text" name="title" id="title" placeholder= "Title"/><br/>
	Content:
	<input type="text" name="content" id="content" placeholder= "Content"/>
	<input type="submit" value="Insert"/>
</form>
*/
?>
<!DOCTYPE html>
<html>
?>
<form action "pageIndex.php?controller=news&task=store" method="POST">
	_Title_: 
	<input type="text" name="title" id="title" placeholder= "Title"/><br/>
	Content:
	<input type="text" name="content" id="content" placeholder= "Content"/>
	<input type="submit" value="Save"/>
</form>
</html>