<html>
<head>
    <title>Cart</title>
    <style>
        table{
            border-collapse: collapse;
            
            color:#d96459;
            font-family: monospace;
            font-size: 25px;
            text-align:left;
        }
        figure{
             margin:0;
        }
        figure a
        {
            position:absolute;
            top:10px;
            left:10px;
           
        }
        .img
        {
            width:50px;
            height:30px;
        }
        th{
            background-color: #588c7e;
            color:white;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }

        .add
        {
            background-color: lightgreen;
            border-radius: 5px;
            border:none;
        }
        .remove
        {
            background-color: red;
            border-radius: 5px;
            border:none;
            color:white;
        }
        .delete
        {
            background-color: darkred;
            border-radius: 5px;
            border:none;
            color:white;
        }

        h2
        {
            position: relative;
            top:160px;
            left:35%;
        }
        .p1
        {
            position: relative;
            top:83px;
            left:28%;
        }
        .p2
        {
            position: relative;
            top:7px;
            left:35%;
        }

 
.btn
{
            position: absolute;
            left:590px;
            width:90px;
            height: 40px;


        }
        .t1
        {
            height: 30px;
        }
        
    


        </style>
</head>
<body>
<figure>
    <a href="javascript:void(0);" class="leftarrow" onclick="history.back()">
        <img src="backa1.png" alt="Go back" class="img">
    </a>
</figure>

    <div class="cont">
  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table cellspacing='5' cellpadding='5' align='center'>
        <tr class="t1" style="background-color: orange; color:black ">
        <td colspan="6" style="padding-left: 260px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">BCA FOODWALA<br></td></tr>
        <tr class="t1" style="background-color: orange; color:black ">
        <td colspan="6" style="padding-left: 180px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ">Near Bhandarkars college,Kundapura<br></td></tr>
        <tr class="t1" style="background-color: orange; color:black ">
        <td colspan="6" style="padding-left: 230px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ">Contact:+91 9380681373</td></tr>
    </tr>
        
        <tr>
            <th>Item id</th>
            <th>Item name</th>
            <th>Amount</th>
           
        </tr>
        <?php
            $cn=mysqli_connect('localhost','root','','temp');
            $qry="select * from itemlist";
            $rs=mysqli_query($cn,$qry);
            $rc=mysqli_num_rows($rs);
            if($rc!=0)
            {
                while($row=mysqli_fetch_array($rs))
                {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["amount"]."</td>";
                    echo "</tr>";
                }
                
            } else {
                echo "<tr><td colspan='6'>No items found</td></tr>";
            }
        ?>
        
    </table>
    
</form>
    </div>
        </body>
        </html>