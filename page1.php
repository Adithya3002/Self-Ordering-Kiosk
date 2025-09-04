<?php
    if(isset($_POST['add_button'])) {

        $conn = mysqli_connect("localhost", "root", "", "database");

        
        if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get label value from the form
        $label = $_POST['label'];

        // Insert label and button into the database
        $button = "Buy"; // default button text
        $sql = "INSERT INTO labels_buttons (label, button) VALUES ('$label', '$button')";
        
        if(mysqli_query($conn, $sql)) {
            echo "Label and button added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <form method="post">
        <label for="label">Label Name:</label>
        <input type="text" id="label" name="label" required>
        <input type="submit" name="add_button" value="Add Label and Button">
    </form>
</body>
</html>
