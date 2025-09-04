<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body> 
    <form method="post" action="practice1.php">
        <section class="item1">
            <?php
                $conn = new mysqli("localhost", "root", "", "temp");
                $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 0";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $name = $row["name"];
                $amount = $row["amount"];
                $conn->close();
            ?>

            <section class="idly"></section>
            <label class="name1"><?php echo $name;?></label>
            <label id="amount1" class="amount1"><?php echo $amount;?></label>
            <img class="rupee" src="indianrupee.svg">
            <p>Melt in the mouth steamed cakes made with a fermented batter of rice and lentils<br> cooked on flat thin plate</p>
            <input type="number" name="quantity1" placeholder="Enter quantity">
            <input type="submit" name="btn1" value="Add+">
            <img class="idlyimg" src="idly.jpg">
        </section>
    </form>

    <form method="post" action="practice1.php">
        <section class="item2">
            <?php
                $conn = new mysqli("localhost", "root", "", "temp");
                $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 1";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $name = $row["name"];
                $amount = $row["amount"];
                $conn->close();
            ?>
            <section class="idly"></section>
            <label class="name1"><?php echo $name;?></label>
            <label id="amount2" class="amount1"><?php echo $amount;?></label>
            <img class="rupee" src="indianrupee.svg">
            <p>Crispy donut-shaped deep-fried fritters made of ground black lentil batter mixed with<br> finely diced onions served with a spicy sambar and chutney</p>
            <input type="number" name="quantity2" placeholder="Enter quantity" required>
            <input type="submit" name="btn2" value="Add+">
            <img class="idlyimg" src="vada.jpg">
        </section>
    </form>
</body>
</html>
