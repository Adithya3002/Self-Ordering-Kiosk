
<html>
    <head>
       <link rel="stylesheet" href="display.css">
    </head>

    <body>
        
        <nav class="upper" style="background-color: #333;">
            <!-- <a class="arrow" href="project.html">
                <img src="leftarrow.svg" style="color:orange"></a> -->
            
                <figure>
    <a href="javascript:void(0);" class="leftarrow" onclick="history.back()">
        <img src="leftarrow.png" alt="Go back" class="img">
    </a>
</figure>

               
            <a href="cart.php"><img class="cartpic" src="cart.png" alt=""></a>
            <a href="about.html">ABOUT</a>
            <a href="contact.html">CONTACT</a>
            <a href="menu.html">MENU</a>
            <a href="project.php">HOME</a>
        </nav>
        <div class="bigcont">
            <aside class="left">
                <img class="logo" src="bcalogo.png" alt="">

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                <br>
                <br>
                <hr>
                <br>
                
                <nav class="lower">
                    <a href="south.php">SOUTH INDIAN</a>
                    <a href="chinese.php">CHINESE</a>
                    <a href="chats.php">CHATS</a>
                    <a href="juice.php">JUICE</a>
                </nav>
            <br/><br/><hr><br/>
            <p>&copy;2024 BCA Foodwala All Rights Reserved
                Design By Adithya, Akshay, Samarth.</p>
            <br>
            <hr>
            </aside>

            <div class="sub">


            <?php
$cn = mysqli_connect('localhost', 'root', '', 'temp');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_id = $_POST['item_id'];
    $qty = (int)$_POST['qty']; // Ensure qty is an integer

    // Fetch current details of the item
    $qry = "SELECT * FROM item WHERE id = '$item_id'";
    $rs = mysqli_query($cn, $qry);
    $row = mysqli_fetch_assoc($rs);

    if ($row) {
        // If item exists, update the quantity and amount
        $new_qty = $row['quantity'] + $qty;
        $new_amount = $new_qty * $row['price'];
        $update_qry = "UPDATE item SET quantity = '$new_qty', amount = '$new_amount' WHERE id = '$item_id'";
        $rs = mysqli_query($cn, $update_qry);
        if ($rs) {
            echo "<script>alert('Successfully added');</script>";
            echo "<script>window.location.href='display.php';</script>";
        } else {
            echo "<script>alert('Not added');</script>";
            echo "<script>window.location.href='display.php';</script>";
        }
    } else {
        // If item does not exist, insert the new item
        $name = $_POST['name'];
        $price = (int)$_POST['price'];
        $amount = $qty * $price;
        $insert_qry = "INSERT INTO item (id, price, name, quantity, amount) VALUES ('$item_id', $price, '$name', '$qty', '$amount')";
        $rs = mysqli_query($cn, $insert_qry);
        if ($rs) {
            echo "<script>alert('Successfully added');</script>";
            echo "<script>window.location.href='display.php';</script>";
        } else {
            echo "<script>alert('Not added');</script>";
            echo "<script>window.location.href='display.php';</script>";
        }
    }
}

// Fetch and display item list
$qry = "SELECT * FROM itemlist2";
$rs = mysqli_query($cn, $qry);
$rc = mysqli_num_rows($rs);

if ($rc != 0) {
    while ($row = mysqli_fetch_array($rs)) {
        echo "<form method='post' action=''>";
        echo "<table class='tab' border='1'>";
        echo "<tr><td>ITEM ID:</td><td>".$row['id']."</td></tr>";
        echo "<tr><td>ITEM NAME:</td><td>".$row['name']."</td></tr>";
        echo "<tr><td>ITEM PRICE:</td><td>".$row['amount']."</td></tr>";
        echo "<tr><td>QUANTITY:</td><td><input class='qty' type='text' name='qty'></td></tr>";
        echo "<input type='hidden' name='item_id' value='".$row['id']."'>";
        echo "<input type='hidden' name='name' value='".$row['name']."'>";
        echo "<input type='hidden' name='price' value='".$row['amount']."'>";
        echo "<tr><td colspan=3><center><input type='submit' class='btn' name='btn' value='Add+'></center></td></tr>";
        echo "</table>";
        echo "</form>";
        echo "<br><br>";
    }
} else {
    echo "No items found.";
}
?>













</div>
        </div>
    
 
        <footer>
            <p>&copy;2024 BCA Foodwala All Rights Reserved
                Design By Adithya, Akshay, Samarth.</p>
        </footer>
    






    </body>
</html>

