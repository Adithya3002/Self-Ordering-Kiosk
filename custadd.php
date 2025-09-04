<html>
	<head>
		<title>Cust add</title>
	</head>
	<body>
		<form method="post" action="">
			<table border="2" cellspacing="5" cellpadding="5" align="center">
				<tr><td><label>Cust id</label></td>
					<td><input type="text" name="cid"></td></tr>
				<tr><td><label>Cust name</label></td>
					<td><input type="text" name="nam"></td></tr>
				<tr><td><label>Item</label></td>
					<td><input type="text" name="item"></td></tr>
				<tr><td><label>Mobile</label></td>
					<td><input type="mobile" name="mob"></td></tr>
				<tr><td colspan="2"><center><input type="submit" name="btn"></center><Br><center><a href='cust.php'>Home page</a></center></td></tr>
			</table>
		</form>
	</body>
</html>
<?php
if(isset($_POST['btn']))
{
	$cid=$_POST['cid'];
	$nam=$_POST['nam'];
	$item=$_POST['item'];
	$mob=$_POST['mob'];
	$error=array();
	if(empty($cid))
	{
		$error[]="please enter id";
	}
	if(empty($error))
	{
		$cn=mysqli_connect('localhost','root','','customer');
		$qry="select * from cust where cid=".$cid."";
		$rs=mysqli_query($cn,$qry);
		$rc=mysqli_num_rows($rs);
		if($rc==0)
		{
			$qry="insert into cust(cid,nam,item,mob)values(".$cid.",'".$nam."','".$item."','".$mob."')";
			$rs=mysqli_query($cn,$qry);
			if($rs)
			{
				echo "<script>alert('record inserted');</script>";
				echo "<script>window.location.href='custadd.php';</script>";
			}
		}
		else
		{
			echo "<script>alert('id already exsist');</script>";
			echo "<script>window.location.href='custadd.php';</script>";
		}
	}
	else
	{
		$msg="";
		foreach($error as $er)
		{
			$msg=$msg."\\n".$er;
		}
		echo "<script>alert('$msg');</script>";
	}
}			
?>