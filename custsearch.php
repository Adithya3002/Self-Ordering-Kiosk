<html>
<head>
	<title>Cust delete</title>
</head>
<body>
	<form method="post" action="">
	<label>Enter id</label><br>
	<input type="text" name="cid">
	<input type="submit" name="btn">
	</form>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
	$cid=$_POST['cid'];
	if(empty($cid))
	{
		echo "<script>alert('empty');</script>";
		echo "<script>window.location.href='custdelete.php';</script>";
	}
	else
	{
		$cn=mysqli_connect('localhost','root','','customer');
		$qry="select * from cust where cid=".$cid."";
		$rs=mysqli_query($cn,$qry);
		$rc=mysqli_num_rows($rs);
		if($rc!=0)
		{
			echo "<table border='2' cellspacing='5' cellpadding='5' align='center'>";
			echo "<tr><th>Cust id</th><th>cust name</th><th>Item</th><th>Mobile</th></tr>";
			while($r=mysqli_fetch_array($rs))
			{
				echo "<tr>";
				echo "<td>".$r[0]."</td>";
				echo "<td>".$r[1]."</td>";
				echo "<td>".$r[2]."</td>";
				echo "<td>".$r[3]."</td></tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "<script>alert('id does not exsist');</script>";
			echo "<script>window.location.href='custdelete.php';</script>";
		}
	}
}
?>
		
