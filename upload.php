<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "yourdatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit'])) {
    $image = $_FILES['image']['tmp_name'];
   $imgContent = addslashes(file_get_contents($image)); 


    $insert = $conn->query("INSERT into images (image) VALUES ('$imgContent')"); 

    if($insert) {
        header("Location: display.php"); 
        exit;
    } else {
        echo "Image upload failed, please try again.";
    }
}

$conn->close();
?>
