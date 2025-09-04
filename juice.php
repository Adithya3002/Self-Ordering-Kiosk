<html>
    <head>
        <title>HOTEL</title>
        <link rel="stylesheet" type="text/css" href="juice.css">
    </head>
    <body>
        <form method="post" action="juice1.php">

        <nav class="upper" style="background-color: #333;">
            <!-- <a class="arrow" href="project.html">
                <img src="leftarrow.svg" style="color:orange"></a> -->


                <figure>
    <a href="javascript:void(0);" class="leftarrow" onclick="history.back()">
        <img src="leftarrow.png" alt="Go back" class="img">
    </a>
</figure>
            <a href="cart.php"><img class="cartpic" src="cart.png" alt=""></a>
            <a href="about.html">ABOUT</a>
            <a href="contact.html">CONTACT</a>
            <a href="menu.html">MENU</a>
            <a href="project.php">HOME</a>
        </nav>
        <div class="bigcont">
            <aside class="left">
                <img class="logo" src="bcalogo.png" alt="">

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                <br>
                <br>
                <hr>
                <br>
                
                <nav class="lower">
                    <a href="south.php">SOUTH INDIAN</a>
                    <a href="north.php">NORTH INDIAN</a>
                    <a href="chinese.php">CHINESE</a>
                    <a href="chats.php">CHATS</a>
                </nav>
            <br/><br/><hr><br/>
            <p>&copy;2024 BCA Foodwala All Rights Reserved
                Design By Adithya, Akshay, Samarth.</p>
            <br>
            <hr>
            </aside>
            <div class="sub">
           
                <section class="item1">
                    <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=133";
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
                    <p>Mango milshake is made of fresh mangoes</p>
                    <input type="number" class="inp" name="quantity1" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn1" name="btn1" value="Add+">
                    <img class="idlyimg" src="mango.jpg">
        
                </section>


                <section class="item2">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=134";
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
                    <p>Oreo milkshake: a luscious fusion of crushed Oreos and creamy milk, delivering<br> a delightful blend of chocolatey sweetness and cookie crunch in every sip</p>
                    <input type="number"  class="inp" name="quantity2" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn2" name="btn2" value="Add+">
                    <img class="idlyimg" src="oreo.jpg">

                </section>

   

                <section class="item3">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=135";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $name = $row["name"];
                        $amount = $row["amount"];
                        $conn->close();
                    ?>
                  <section class="idly"></section>
                    <label class="name1"><?php echo $name;?></label>
                    <label id="amount3" class="amount1"><?php echo $amount;?></label>
                    <img class="rupee" src="indianrupee.svg">
                    <p>Strawberry milkshake: a smooth concoction of fresh strawberries blended with<br> creamy milk, offering a burst of fruity sweetness in every sip</p>
                    <input type="number" class="inp" name="quantity3" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn3" name="btn3" value="Add+">
                    <img class="idlyimg" src="strawberry.jpg">
                </section>

            
                <section class="item4">

<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=136";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $amount = $row["amount"];
        $conn->close();
    ?>

    <section class="idly"></section>
    <label class="name1"><?php echo $name;?></label>
    <label id="amount4" class="amount1"><?php echo $amount;?></label>
    <img class="rupee" src="indianrupee.svg">
    <p>Chiko milkshake: a unique blend featuring Chiko candies crushed into creamy milk,<br> offering a nostalgic and delightful taste experience in every sip</p>
    <input type="number" class="inp" name="quantity4" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn4" name="btn4" value="Add+">
    <img class="idlyimg" src="chiko.jpg">                
</section>


              

                <section class="item5">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=137";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $name = $row["name"];
                        $amount = $row["amount"];
                        $conn->close();
                    ?>
                     <section class="idly"></section>
                    <label class="name1"><?php echo $name;?></label>
                    <label id="amount5" class="amount1"><?php echo $amount;?></label>
                    <img class="rupee" src="indianrupee.svg">
                    <p>A velvety fusion of ripe custard apples blended with milk, creating a creamy and <br>indulgent tropical delight in every sip</p>
                    <input type="number" class="inp" name="quantity5" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn5" name="btn5" value="Add+">
                    <img class="idlyimg" src="sitaphal.jpg">      

                </section>
                
           

                <section class="item6">

<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=138";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $amount = $row["amount"];
        $conn->close();
    ?>

    <section class="idly"></section>
    <label class="name1"><?php echo $name;?></label>
    <label id="amount6" class="amount1"><?php echo $amount;?></label>
    <img class="rupee" src="indianrupee.svg">
    <p>A refreshing elixir of freshly pressed watermelon, delivering a burst of hydrating <br>sweetness perfect for hot days</p>
    <input type="number" class="inp" name="quantity6" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn6" name="btn6" value="Add+">
    <img class="idlyimg" src="watermelon.jpg">
</section>


              


<section class="item7">
<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=139";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $amount = $row["amount"];
        $conn->close();
    ?>
    <section class="idly"></section>
    <label class="name1"><?php echo $name;?></label>
    <label id="amount7" class="amount1"><?php echo $amount;?></label>
    <img class="rupee" src="indianrupee.svg">
    <p>A vibrant concoction of ripe kiwi fruit, offering a tangy and refreshing burst of<br> tropical flavor with each sip</p>
    <input type="number" class="inp" name="quantity7" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn7" name="btn7" value="Add+">
    <img class="idlyimg" src="kivi.jpg">
</section>

   

                <section class="item8">

                    <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=140";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $name = $row["name"];
                        $amount = $row["amount"];
                        $conn->close();
                    ?>
                    
                    <section class="idly"></section>
                    <label class="name1"><?php echo $name;?></label>
                    <label id="amount8" class="amount1"><?php echo $amount;?></label>
                    <img class="rupee" src="indianrupee.svg">
                    <p>BCA special shake is made of mixed fruits and icecreams</p>
                    <input type="number" class="inp" name="quantity8" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn8" name="btn8" value="Add+">
                    <img class="idlyimg" src="specialmilkshake.jpg">
                </section>

            </div>
        </div>
    
 
        <footer>
            <p>&copy;2024 BCA Foodwala All Rights Reserved
                Design By Adithya, Akshay, Samarth.</p>
        </footer>
</form>
    </body>
</html>