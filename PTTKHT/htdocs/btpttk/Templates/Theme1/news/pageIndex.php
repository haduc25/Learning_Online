<html>
<body style ="background-color: powderblue">
	<?php
	//import
	include "Templates/Theme1/partials/info.php";
	include "Templates/Theme1/partials/menu.php";
	?>
<table border="1">
	<tr>
		<td>ID </td>
		<td>Title</td>
		<td>Content</td>
		<td>Tools</td>
	</tr>
	<?php foreach($rs as $row)  :?>
	<tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['Title'] ?></td>
            <td><?php echo $row['Content'] ?></td>
		<td>
				<a href="?task=deleteNews&id=<?php echo $row['id'] ?>">delete</a>
            	<a href="?task=updateNews&id=<?php echo $row['id'] ?>">update</a>
		</td>
	</tr>
	<?php endforeach; //break loop?>
</html>
</body>
</table>