<html>
   <head>
    <title>Amount modify</title>
    <link rel="stylesheet" href="modifyamount.css">
   </head>
   <body>
   <figure>
        <a href="adminoption.php" class="leftarrow">
            <img src="leftarrow.png">
        </a>
    </figure>

    <div class="cont">
    <form method="post" action="" class="cont">
    <h2>Change Amount</h2><br>
    <label class="lb1">Item Code:</label>
    <input class="inp1" type="text" name="code" placeholder="Enter item code"><br>
    <label class="lb2">New Amount</label>
    <input class="inp2" type="text" name="amount" placeholder="Enter the new amount"><br>
    <input type="submit" name="sub" value="change" class="btn">
    <input type="submit" name="btn2" class="btn2" value="All item list">
    </form>
    </div>


    <?php
if(isset($_POST['sub']))
{
    $code = $_POST["code"];
    $newAmount = $_POST["amount"];

    if (empty($code) || empty($newAmount)) {
        echo "<script>alert('enter code and amount');</script>";
        echo "<script>window.location.href='modifyamount.php';</script>";
    } else {
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "temp";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "UPDATE itemlist SET amount = $newAmount WHERE id = '$code'";
        
        if ($conn->query($sql) === TRUE) {
            if ($conn->affected_rows > 0) {
                echo "<script>alert('Successfully changed');
                window.location.href='modifyamount.php';</script>";
            } else {
                echo "<script>alert('Invalid code');
                window.location.href='modifyamount.php';</script>";
            }
        } else {
            echo "Error updating record: " . $conn->error;
        }
        
        // Close connection
        $conn->close();
    }
}



if(isset($_POST['btn2']))
{
    header("Location:displayall.php");
}
?>

   </body>
   </html>
