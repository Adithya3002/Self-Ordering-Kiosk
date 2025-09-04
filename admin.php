<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <figure>
        <a href="project.html" class="leftarrow">
            <img src="leftarrow.png">
        </a>
    </figure>

<div class="cont">
<?php
if(isset($_POST['btn']))
{
	$usn=$_POST['usn'];
	$pswd=$_POST['pswd'];
	$error=array();
	if(empty($usn))
	{
		$error[]="please enter username";
	}
	if(empty($pswd))
	{
		$error[]="please enter password";
	}
	if(empty($error))
	{
		$conn=mysqli_connect('localhost','root','','temp');
		$qry="select * from admin where username='".$usn."'and password='".$pswd."'";
		$r=mysqli_query($conn,$qry);
		$rc=mysqli_num_rows($r);
		if($rc!=0)
		{
			header("Location:adminoption.php");
		}
		else
		{
			echo "<script>alert('invalid username and password');
					window.location.href='admin.html';</script>";
		}
	}
	else
	{
		foreach($error as $er)
		{
			echo "<script>alert('$er');</script>";
		}
		echo "<script>window.location.href='admin.html';</script>";
	}
}
?>
	</body>
</html>