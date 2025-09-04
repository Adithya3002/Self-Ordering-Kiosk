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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
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
                            <input type='submit' name='add_".$row["id"]."' value='Add'>
                            <input type='submit' name='delete_".$row["id"]."' value='Delete'>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No items found</td></tr>";
            }
        ?>
    </table>
</form>
<?php
    $conn->close();
?>
