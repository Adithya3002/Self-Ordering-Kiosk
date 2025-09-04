<html>
	<head>
		<title>Customer</title>
	</head>
	<body>
	<form method="post" action="">
		<table border="2" cellspacing="2" cellpadding="2" align="center">
			<tr><td><input type="submit" name="add" value="add"></td>
				<td><input type="submit" name="delete" value="delete"></td>
				<td><input type="submit" name="search" value="search"></td>
				<td><input type="submit" name="sort" value="sort"></td>
				<td><input type="submit" name="display" value="display"></td>
			</tr>
		</table>
	</form>
</html>
<?php
if(isset($_POST['add']))
{
	header("Location:custadd.php");
}
else if(isset($_POST['delete']))
{
	header("Location:custdelete.php");
}
else if(isset($_POST['search']))
{
	header("Location:custsearch.php");
}
else if(isset($_POST['sort']))
{
	header("Location:custsort.php");
}
else if(isset($_POST['display']))
{
	header("Location:custdisplay.php");
}
?>
