<html>
    <head>
        <title>All sales</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

        <style>
            body
            {
                background-color: beige;
            }
            td{
                background-color: azure;
            }
            .table
            {
                margin-left:200px;
            }
            .tabl
            {
                position: absolute;
                left:700px;
                top:85px;
            }
            </style>
    </head>
<body>

    <center><h1>ITEMS</h1></center>
            <br>
            <table class="table"  cellpadding="10" cellspacing="0" align="left">
                <thead>
                    <tr style="background-color: orange;">
                        <th>ID</th>
                        <th>ITEM NAME</th>
                        <th>AMOUNT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn=new mysqli("localhost","root","","temp");
                    $sql="select * from itemlist";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["amount"]."</td>
                 
                    </tr>";
                    }
                    $sql = "SELECT SUM(amount) FROM itemlist"; // Query to get the sum of amount
                    $result = $conn->query($sql);
                    
   
                    
        
                    $conn->close();
                    ?>
                    
                </tbody>
               
            </table>
            

            
            <br>
            <table class="tabl"  cellpadding="10" cellspacing="0" align="right">
                <thead>
                    <tr style="background-color: orange;">
                        <th>ID</th>
                        <th>ITEM NAME</th>
                        <th>AMOUNT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn=new mysqli("localhost","root","","temp");
                    $sql="select * from itemlist2";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["amount"]."</td>
                 
                    </tr>";
                    }
                    $sql = "SELECT SUM(amount) FROM itemlist"; // Query to get the sum of amount
                    $result = $conn->query($sql);
                    
   
                    
        
                    $conn->close();
                    ?>
                    
                </tbody>
               
            </table>
            
</body>
</html>
