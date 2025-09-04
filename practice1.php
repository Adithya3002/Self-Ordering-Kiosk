<?php
// Function to check if an item already exists in the orders table
function itemExists($conn, $itemName) {
    $sql = "SELECT COUNT(*) as count FROM item WHERE name = '$itemName'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['count'] > 0;
}

// Function to update an existing item's quantity and amount in the orders table
function updateItem($conn, $itemName, $quantity, $amount) {
    $sql = "UPDATE item SET quantity = quantity + $quantity, amount = (quantity + $quantity) * $amount WHERE name = '$itemName'";
    if ($conn->query($sql) === TRUE) {
        echo "Order for $itemName updated successfully";
    } else {
        echo "Error updating order: " . $conn->error;
    }
}

// Function to insert a new item into the orders table
function insertItem($conn, $itemName, $quantity, $amount) {
    $totalAmount = $quantity * $amount;
    $sql = "INSERT INTO item (name, quantity, amount) VALUES ('$itemName', $quantity, $totalAmount)";
    if ($conn->query($sql) === TRUE) {
        echo "Order for $itemName added successfully";
    } else {
        echo "Error adding order: " . $conn->error;
    }
}

// Check if form is submitted for item 1
if(isset($_POST['btn1'])) {
    // Retrieve quantity for item 1
    $quantity1 = $_POST['quantity1'];

    // Sanitize input
    $quantity1 = intval($quantity1);

    // Connect to database
    $conn = new mysqli("localhost", "root", "", "temp");

    // Retrieve item details for item 1
    $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 0";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $name1 = $row["name"];
    $amount1 = $row["amount"];

    // Check if item 1 already exists in orders table
    if (itemExists($conn, $name1)) {
        // Update existing item
        updateItem($conn, $name1, $quantity1, $amount1);
    } else {
        // Insert new item
        insertItem($conn, $name1, $quantity1, $amount1);
    }

    // Close database connection
    $conn->close();
}

// Check if form is submitted for item 2
if(isset($_POST['btn2'])) {
    // Retrieve quantity for item 2
    $quantity2 = $_POST['quantity2'];

    // Sanitize input
    $quantity2 = intval($quantity2);

    // Connect to database
    $conn = new mysqli("localhost", "root", "", "temp");

    // Retrieve item details for item 2
    $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $name2 = $row["name"];
    $amount2 = $row["amount"];

    // Check if item 2 already exists in orders table
    if (itemExists($conn, $name2)) {
        // Update existing item
        updateItem($conn, $name2, $quantity2, $amount2);
    } else {
        // Insert new item
        insertItem($conn, $name2, $quantity2, $amount2);
    }

    // Close database connection
    $conn->close();
}
?>
