<!DOCTYPE html>
<html>
<head>
    <title>Insert and Retrieve Image from Database</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <label for="image">Select image to upload:</label><br>
    <input type="file" name="image" id="image"><br><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "yourdatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted for image upload
if(isset($_POST['submit'])) {
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image)); 

    // Insert image data into database
    $insert = $conn->query("INSERT into images (image) VALUES ('$imgContent')");

    if($insert) {
        echo "Image uploaded successfully.";
    } else {
        echo "Image upload failed, please try again.";
    }
}


$result = $conn->query("SELECT * FROM images");
if($result->num_rows > 0){
    echo "<table>";
    echo "<tr><th>Image</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td><img src='data:image/jpeg;base64,".base64_encode($row['image'])."'/></td></tr>";
    }
    echo "</table>";
}else{
    echo "No image found!";
}

$conn->close();
?>

</body>
</html>
