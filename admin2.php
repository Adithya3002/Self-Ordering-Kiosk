<html>
    <head>
        <title>All sales</title>
        <style>
            body{
                background-color:azure;
            }
            th
            {
                background-color:#FFA500;

            }
            tr
            {
                background-color: #B7E9F7;
            }
            table
            {
                width:900px;
            }

            .btn
            {
                position: relative;
                left:600px;
                height:50px;
                width:85px;
                border:none;
                background-color: orange;

                background-image: linear-gradient(0, #0A3D5B, #0A3D5B);
    background-size: 0 0;
    transition: .8s;
    background-repeat: no-repeat;
    background-position: center;
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            }
            .btn:hover{
                background-size: 100% 100%;
                color: #fff;
            }
            </style>


    </head>
<body>
<form method="post" action="">
<?php
if(isset($_POST['btn1']))
{
    ?>
    <center><h1>ITEMS</h1></center>
            <br>
            <table class="table" cellpadding="10" align="center" cellspacing="0">
                <thead>
                    <tr>
                        <th>Item name</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn=new mysqli("localhost","root","","temp");
                    $sql="select * from daysales";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr>
                        <td>".$row["name"]."</td>
                        <td>".$row["quantity"]."</td>
                        <td>".$row["amount"]."</td>
                 
                    </tr>";
                    }
                    $sql = "SELECT SUM(amount) FROM daysales"; // Query to get the sum of amount
                    $result = $conn->query($sql);
                    
   
                    
                    if ($result->num_rows > 0) {
                        
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td></td><td>Total Amount:</td><td>" . $row["SUM(amount)"]."</td></tr>"; // Output the total amount
                        }
                    } else {
                        echo "No results found";
                    }
                    $conn->close();
                    ?>
                    
                </tbody>
               
            </table>
            <input type="submit" name="btn" class="btn" value="delete">
<?php
}
?>
<?php
if(isset($_POST['btn2']))
{
    header("Location:modifyamount.php");

}
if(isset($_POST['btn3']))
{
    header("Location:add_item.php");
}
?>


   
</form>


</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $cn=mysqli_connect('localhost','root','','temp');
    $qry="select * from daysales";
    $rs=mysqli_query($cn,$qry);
    $rc=mysqli_num_rows($rs);
    if($rc!=0)
    {
        $qry="truncate table daysales";
        $rs=mysqli_query($cn,$qry);
        if($rs)
        {
            echo "<script>alert('successfully deleted');</script>";
            echo "<script>window.location.href='adminoption.php';</script>";
        }
    }
    else
    {
        echo "<script>alert('Items not exsist');</script>";
        echo "<script>window.location.href='adminoption.php';</script>";
    }
}
?>
