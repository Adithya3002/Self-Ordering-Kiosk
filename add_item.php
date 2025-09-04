<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" href="add_item.css">
	</head>
	<body>
        
	<figure>
        <a href="adminoption.php" class="leftarrow">
            <img src="leftarrow.png">
        </a>
    </figure>
    <div class="cont">
    
        <form method="post" action="" class="cont">
        <h2>ADD NEW ITEMS</h2>
            <label class="l1">ITEM ID</label>
            <input type="text" name="id" class="id"><br>
            <label class="l2">ITEM NAME</label>
            <input type="text" name="name" class="name"><br>
            <label class="l3">ITEM PRICE</label>
            <input type="text" name="amount" class="amount"><br>
            <input type="submit" name="btn" class="btn">
            
        </form>
  </div>
  </body>
  </html>
<?php
if(isset($_POST['btn']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $amount=$_POST['amount'];
    $error=array();
    if(empty($id))
    {
        $error[]="enter id";
    }
    if(empty($name))
    {
        $error[]="enter name";
    }
    if(empty($amount))
    {
        $error[]="enter amount";
    }
    if(empty($error))
    {
    $cn=mysqli_connect('localhost','root','','temp');
    $qry="select * from itemlist2 where id=".$id."";
    $rs=mysqli_query($cn,$qry);
    $rc=mysqli_num_rows($rs);
    if($rc==0)
    {
        $qry="insert into itemlist2(id,name,amount) values(".$id.",'".$name."',".$amount.")";
        $rs=mysqli_query($cn,$qry);
        if($rs)
        {
            echo "<script>alert('successfully inserted');</script>";
            echo "<script>window.location.href='add_item.php';</script>";
        }
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
    echo "<script>window.location.href='add_item.php';</script>";
}

}


?>
  