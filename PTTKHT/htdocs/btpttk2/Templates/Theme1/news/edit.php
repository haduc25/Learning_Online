<?php
require_once "Templates/Theme1/partials/info.php";
require_once "Templates/Theme1/partials/menu.php";
?>
<!DOCTYPE html>
<html>
	Edit Form:
	<form action="pageIndex.php?task=saveNews" method="POST">
		_Title_: 
		<input type="text" name="title" id="title" placeholder= "Title" value ="<?php echo $row['title']?>/><br/>
		Content:
		<input type="text" name="content" id="content" placeholder= "Content" value="<?php echo $row['content']?>/>
		<input type="hidden" name="id" placeholder= "ID" value = "<?php echo $row['id']?>"/>
		<input type="submit" value="Save"/>
	</form>
</html>