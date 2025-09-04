<?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "database");

    // Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve labels and buttons from the database
    $sql = "SELECT * FROM labels_buttons";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<label>" . $row['label'] . "</label>";
            echo "<button>" . $row['button'] . "</button>";
            echo "<br>";
        }
    } else {
        echo "No labels and buttons added yet.";
    }

    // Close connection
    mysqli_close($conn);
?>
