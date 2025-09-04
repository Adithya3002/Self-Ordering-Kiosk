<?php
    $conn = new mysqli("localhost", "root", "", "temp");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'add_') !== false) {
                $itemId = substr($key, 4); // Extract item id from form element name
                // Increase quantity by 1
                $sql = "UPDATE item SET quantity = quantity + 1, amount = quantity * price WHERE id = $itemId";
                $result = $conn->query($sql);
                if ($conn->affected_rows > 0) {
                    // Quantity updated successfully
                    // Perform any other actions or display success message
                } else {
                    // No rows affected, possibly item not found
                    // Handle this case
                }
            } elseif (strpos($key, 'remove_') !== false) {
                $itemId = substr($key, 7); // Extract item id from form element name
                // Decrease quantity by 1
                $sql = "UPDATE item SET quantity = GREATEST(quantity - 1, 1), amount = quantity * price WHERE id = $itemId";
                $result = $conn->query($sql);
                if ($conn->affected_rows > 0) {
                    // Quantity updated successfully
                    // Perform any other actions or display success message
                } else {
                    // No rows affected, possibly item not found
                    // Handle this case
                }
            } elseif (strpos($key, 'delete_') !== false) {
                $itemId = substr($key, 7); // Extract item id from form element name
                // Delete the item from the cart
                $sql = "DELETE FROM item WHERE id = $itemId";
                $result = $conn->query($sql);
                if ($conn->affected_rows > 0) {
                    // Item deleted successfully
                    // Perform any other actions or display success message
                } else {
                    // No rows affected, possibly item not found
                    // Handle this case
                }
            }
        }
    }

    $sql = "SELECT * FROM item";
    $result = $conn->query($sql);
?>
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
            top:163px;
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
    <a href="menu.html" class="leftarrow" onclick="history.back()">
        <img src="backa1.png" alt="Go back" class="img">
    </a>
</figure>





    <div class="cont">
  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table cellspacing='5' cellpadding='5' align='center'>
        <tr class="t1" style="background-color: orange; color:black ">
        <td colspan="6" style="padding-left: 450px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">BCA FOODWALA<br></td></tr>
        <tr class="t1" style="background-color: orange; color:black ">
        <td colspan="6" style="padding-left: 340px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ">Near Bhandarkars college,Kundapura<br></td></tr>
        <tr class="t1" style="background-color: orange; color:black ">
        <td colspan="6" style="padding-left: 400px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ">Contact:+91 9380681373</td></tr>
    </tr>
        
        <tr>
            <th>Item id</th>
            <th>Item price</th>
            <th>Item name</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["price"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["quantity"]."</td>";
                    echo "<td>".$row["amount"]."</td>";
                    echo "<td>
                            <input type='hidden' name='item_id_".$row["id"]."' value='".$row["id"]."'>
                            <input type='submit' name='add_".$row["id"]."' value='+' class='add'>
                            <input type='submit' name='remove_".$row["id"]."' value='-' class='remove'>
                            <input type='submit' name='delete_".$row["id"]."' value='delete' class='delete'>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No items found</td></tr>";
            }



            $sql = "SELECT SUM(amount) FROM item"; // Query to get the sum of amount
            $result = $conn->query($sql);
            

            
            if ($result->num_rows > 0) {
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td></td><td>Total Amount:</td><td>" . $row["SUM(amount)"]."</td></tr>"; // Output the total amount
                }
            } else {
                echo "No results found";
            }
          


        ?>
        
    </table>
    <input type="submit" name="btn" class="btn">
</form>
    </div>

    <script>
        function displayData() {
            console.log("Page is fully loaded and data is displayed");
            // Additional JavaScript actions can be performed here
        }
    </script>
        </body>
        </html>

<?php
    $conn->close();
?>
<?php

if(isset($_POST['btn'])) {
    $cn = mysqli_connect('localhost', 'root', '', 'temp');

    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve data from the item table
    $sql_select = "SELECT * FROM item";
    $result_select = mysqli_query($cn, $sql_select);

    if (!$result_select) {
        die("Error selecting data: " . mysqli_error($cn));
    }

    // Loop through each item
    while ($row = mysqli_fetch_assoc($result_select)) 
    {
        $itemName = $row['name'];
        $itemQuantity = $row['quantity'];
        $itemAmount = $row['amount'];
        $price=$row['price'];
        if($itemQuantity>0)
        {

        // Check if the item already exists in day_todaysales
        $sql_check = "SELECT * FROM daysales WHERE name = '$itemName'";
        $result_check = mysqli_query($cn, $sql_check);

        if (!$result_check) {
            die("Error checking existing item: " . mysqli_error($cn));
        }

        if (mysqli_num_rows($result_check) > 0) {
            // Item exists, update quantity and amount
            $existingRow = mysqli_fetch_assoc($result_check);
            $existingQuantity = $existingRow['quantity'];
            $newQuantity = $existingQuantity + $itemQuantity;

            $newAmount = $newQuantity * $price;

            $sql_update = "UPDATE daysales SET quantity = '$newQuantity', amount = '$newAmount' WHERE name = '$itemName'";
            $result_update = mysqli_query($cn, $sql_update);

            if (!$result_update) {
                die("Error updating item: " . mysqli_error($cn));
            }
        } else {
            // Item doesn't exist, insert a new row
            $newAmount = $itemQuantity * $itemAmount;
            $sql_insert = "INSERT INTO daysales (name, quantity, amount) VALUES ('$itemName', '$itemQuantity', '$newAmount')";
            $result_insert = mysqli_query($cn, $sql_insert);

            if (!$result_insert) {
                die("Error inserting new item: " . mysqli_error($cn));
            }
        }
    }
    }

    $qry="select * from item";
    $rs=mysqli_query($cn,$qry);
    $rc=mysqli_num_rows($rs);
    if($rc!=0)
    {


    $sql_truncate = "TRUNCATE TABLE item";
    $result_truncate = mysqli_query($cn, $sql_truncate);
    if($result_truncate)
    {
        echo "<script>alert('Thank you for purchasing wait for your order');
        window.location.href='project.php';</script>";
        
    }
}
else
{
    echo "<script>alert('item does not exsist');</script>";
    echo "<script>window.location.href='project.php';</script>";
}


    // Close connection
    mysqli_close($cn);
}
?>
