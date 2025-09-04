
<?php

		$cn=mysqli_connect('localhost','root','','customer');
		$qry="select * from cust order by cid";
		$rs=mysqli_query($cn,$qry);
		$rc=mysqli_num_rows($rs);
		if($rc!=0)	
		{
			echo "<table border='1' cellspacing='5' cellpadding='5' align='center'>";
			echo "<tr><th>Cust id</th><th>Cust name</th><th>Item</th><th>mob</th></tr>";
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
			echo "<script>alert('no items');</script>";
			echo "<script>window.location.href='custsort.php';</script>";
		}

?>
		
		
	