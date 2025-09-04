<?php

function itemExists($conn, $itemName) {
    $sql = "SELECT COUNT(*) as count FROM item WHERE name = '$itemName'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['count'] > 0;
}


function updateItem($conn, $itemName, $quantity, $amount) {
    $sql = "UPDATE item SET quantity = quantity + $quantity, amount = (quantity + $quantity) * $amount WHERE name = '$itemName'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('added to cart');
                window.location.href='juice.php';</script>";
    } else {
        echo "Error updating order: " . $conn->error;
    }
}


function insertItem($conn,$id,$price,$itemName, $quantity, $amount) {
    $totalAmount = $quantity * $amount;
    $sql = "INSERT INTO item (id,price,name, quantity, amount) VALUES ($id,$price,'$itemName', $quantity, $totalAmount)";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('added to cart');
                window.location.href='juice.php';</script>";
    } else {
        echo "Error adding order: " . $conn->error;
    }
}


if(isset($_POST['btn1'])) {
   

    $quantity1 = $_POST['quantity1'];
    if($quantity1>0)
    {
    
    $quantity1 = intval($quantity1);

    
    $conn = new mysqli("localhost", "root", "", "temp");

   
    $sql = "SELECT id,name, amount FROM itemlist where id=133";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id1=$row["id"];    //here
    $name1 = $row["name"];
    $amount1 = $row["amount"];
    $price=$row["amount"];

    
    if (itemExists($conn, $name1)) {
     
        updateItem($conn, $name1, $quantity1, $amount1);
    } else {
      
        insertItem($conn,$id1,$price,$name1, $quantity1, $amount1);   //here
    }

   
    $conn->close();
}
else
{
    echo "<script>alert('invalid quantity');
    window.location.href='juice.php';</script>";
}
}


if(isset($_POST['btn2'])) {
   
    $quantity2 = $_POST['quantity2'];
    if($quantity2>0)
    {

    $quantity2 = intval($quantity2);


    $conn = new mysqli("localhost", "root", "", "temp");


    $sql = "SELECT id,name, amount FROM itemlist where id=134";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id2=$row["id"];
    $name2 = $row["name"];
    $amount2 = $row["amount"];
    $price=$row["amount"];

    
    if (itemExists($conn, $name2)) {
        
        updateItem($conn, $name2, $quantity2, $amount2);
    } else {
       
        insertItem($conn,$id2,$price, $name2, $quantity2, $amount2);
    }

   
    $conn->close();
    }
    else 
    {
        echo "<script>alert('invalid quantity');
        window.location.href='juice.php';</script>";
    }
}


if(isset($_POST['btn3'])) {
  
    $quantity3 = $_POST['quantity3'];
    if($quantity3>0)
    {
    $quantity3 = intval($quantity3);

    
    $conn = new mysqli("localhost", "root", "", "temp");

    $sql = "SELECT id,name, amount FROM itemlist where id=135";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id3=$row["id"];
    $name3 = $row["name"];
    $amount3 = $row["amount"];
    $price=$row["amount"];

    if (itemExists($conn, $name3)) {
     
        updateItem($conn, $name3, $quantity3, $amount3);
    } else {
      
        insertItem($conn, $id3,$price,$name3, $quantity3, $amount3);
    }

 
    $conn->close();
}
else
{
    echo "<script>alert('invalid quantity');
    window.location.href='juice.php';</script>";
}
}

if(isset($_POST['btn4'])) {
 
    $quantity4 = $_POST['quantity4'];
    if($quantity4>0)
    {
    $quantity4 = intval($quantity4);

    $conn = new mysqli("localhost", "root", "", "temp");

   
    $sql = "SELECT id,name, amount FROM itemlist where id=136";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id4=$row["id"];
    $name4 = $row["name"];
    $amount4 = $row["amount"];
    $price=$row["amount"];

   
    if (itemExists($conn, $name4)) {
        
        updateItem($conn, $name4, $quantity4, $amount4);
    } else {
        
        insertItem($conn,$id4,$price, $name4, $quantity4, $amount4);
    }

    
    $conn->close();
}
else
{
    echo "<script>alert('invalid quantity');
    window.location.href='juice.php';</script>";
}
}

if(isset($_POST['btn5'])) {
  
    $quantity5 = $_POST['quantity5'];
    if($quantity5>0)
    {

    $quantity5 = intval($quantity5);

    $conn = new mysqli("localhost", "root", "", "temp");


    $sql = "SELECT id,name, amount FROM itemlist where id=137";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id5=$row["id"];
    $name5 = $row["name"];
    $amount5 = $row["amount"];
    $price=$row["amount"];

    if (itemExists($conn, $name5)) {
       
        updateItem($conn, $name5, $quantity5, $amount5);
    } else {
       
        insertItem($conn, $id5,$price,$name5, $quantity5, $amount5);
    }

    $conn->close();
}
else
{
    echo "<script>alert('invalid quantity');
    window.location.href='juice.php';</script>";
}
}

if(isset($_POST['btn6'])) {
   
    $quantity6 = $_POST['quantity6'];
    if($quantity6>0)
    {

   
    $quantity6 = intval($quantity6);

    
    $conn = new mysqli("localhost", "root", "", "temp");

   
    $sql = "SELECT id,name, amount FROM itemlist where id=138";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id6=$row["id"];
    $name6 = $row["name"];
    $amount6 = $row["amount"];
    $price=$row["amount"];

   
    if (itemExists($conn, $name6)) {
        
        updateItem($conn, $name6, $quantity6, $amount6);
    } else {
       
        insertItem($conn,$id6,$price, $name6, $quantity6, $amount6);
    }


    $conn->close();
}
else
{
    echo "<script>alert('invalid quantity');
    window.location.href='juice.php';</script>";
}
}

if(isset($_POST['btn7'])) {
   
    $quantity7 = $_POST['quantity7'];
    if($quantity7>0)
    {
    $quantity7 = intval($quantity7);

    
    $conn = new mysqli("localhost", "root", "", "temp");

  
    $sql = "SELECT id,name, amount FROM itemlist where id=139";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id7=$row["id"];
    $name7 = $row["name"];
    $amount7 = $row["amount"];
    $price=$row["amount"];

   
    if (itemExists($conn, $name7)) {
        
        updateItem($conn, $name7, $quantity7, $amount7);
    } else {
      
        insertItem($conn,$id7,$price, $name7, $quantity7, $amount7);
    }

  
    $conn->close();
}
else
{
    echo "<script>alert('invalid quantity');
    window.location.href='juice.php';</script>";
}
}

if(isset($_POST['btn8'])) {
   
    $quantity8 = $_POST['quantity8'];
    if($quantity8>0)
    {
    $quantity8 = intval($quantity8);

  
    $conn = new mysqli("localhost", "root", "", "temp");


    $sql = "SELECT id,name, amount FROM itemlist where id=140";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id8=$row["id"];
    $name8 = $row["name"];
    $amount8 = $row["amount"];
    $price=$row["amount"];

   
    if (itemExists($conn, $name8)) {
       
        updateItem($conn, $name8, $quantity8, $amount8);
    } else {
       
        insertItem($conn,$id8,$price, $name8, $quantity8, $amount8);
    }

  
    $conn->close();
}
else
{
    echo "<script>alert('invalid quantity');
    window.location.href='juice.php';</script>";
}
}
?>
