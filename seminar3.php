<html>
    <head>
        <title>Failed</title>
        <link rel="stylesheet" type="text/css" href="seminar3.css">
    </head>
    <body>
    <?php
session_start(); // Start the session
if(isset($_SESSION['errors'])) {
    echo "<div class='error-container'>";
    
    echo "<h3>FAILED!!!!</h3>";
    echo "<h5>Validations are:</h5>";
    $counter = 1; // Initialize counter
    foreach($_SESSION['errors'] as $error) {
        echo "<p>$counter. $error</p>"; // Add numbering
        $counter++; // Increment counter
    }
    echo "<p class='p1'>Click here to go<a href='seminar.php'>Back</a></p>";
    echo "</div>";
    unset($_SESSION['errors']); // Clear the session variable
    

}
?>



</body>
</html>
