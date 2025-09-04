<html>
    <head>
        <title>HOTEL</title>
        <link rel="stylesheet" type="text/css" href="chinese.css">
    </head>
    <body>
        <form method="post" action="chinese1.php">
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
                    <a href="chats.php">CHATS</a>
                    <a href="juice.php">JUICE</a>
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
                        $sql = "SELECT name, amount FROM itemlist where id=117";
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
                    <p>Vegetable fried rice is a flavorful stir-fried dish made with cooked rice, mixed <br> vegetables, and seasoned with soy sauce and spices.</p>
                    <input type="number" class="inp" name="quantity1" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn1" name="btn1" value="Add+">
                    <img class="idlyimg" src="vegfriedrice.jpg">
        
                </section>


                <section class="item2">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=118";
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
                    <p>Veg noodles are stir-fried noodles combined with a variety of vegetables and seasoned<br> with sauces and spices.</p>
                    <input type="number"  class="inp" name="quantity2" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn2" name="btn2" value="Add+">
                    <img class="idlyimg" src="vegnoodels.jpg">

                </section>

  

                <section class="item3">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=119";
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
                    <p>Gobi Manchurian is a popular Indo-Chinese dish featuring deep-fried cauliflower<br> florets tossed in a spicy and tangy sauce.</p>

                    <input type="number" class="inp" name="quantity3" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn3" name="btn3" value="Add+">
                    <img class="idlyimg" src="gobirice.jpg">
                </section>

              

                <section class="item4">

<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=120";
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
    <p>
        Veg Kolhapuri is a spicy Indian curry made with mixed vegetables, flavored with a<br> blend of traditional Kolhapuri spices, delivering a rich and vibrant taste experience.</p>
    <input type="number" class="inp" name="quantity4" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn4" name="btn4" value="Add+">
    <img class="idlyimg" src="gobi.jpg">                
</section>



        
                
                <section class="item5">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=121";
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
                    <p>Dal tadka is a popular Indian lentil dish made from a blend of cooked yellow lentils<br> tempered with ghee, cumin seeds, and red chillies</p>
                    <input type="number" class="inp" name="quantity5" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn5" name="btn5" value="Add+">
                    <img class="idlyimg" src="pannermanchurian.jpg">      

                </section>
                

                <section class="item6">
<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=122";
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
    <p>Tender slices of mushrooms sautéed with aromatic spices and black pepper, creating <br>a flavorful and hearty vegetarian dish</p>

    <input type="number" class="inp" name="quantity6" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn6" name="btn6" value="Add+">
    <img class="idlyimg" src="mushroompeperdry.jpg">
</section>

  


<section class="item7">

<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=123";
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
    <p>Al dente noodles tossed in a rich marinara sauce infused with aromatic herbs and <br>topped with succulent shrimp or grilled chicken for a gourmet Italian experience</p>
    <input type="number" class="inp" name="quantity7" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn7" name="btn7" value="Add+">
    <img class="idlyimg" src="pasta.jpg">
</section>




                <section class="item8">

<?php
    $conn = new mysqli("localhost", "root", "", "temp");
    $sql = "SELECT name, amount FROM itemlist where id=124";
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
<p>Succulent balls of chicken or vegetables coated in a zesty sauce, delivering a perfect<br> blend of crunch and flavor</p>

<input type="number" class="inp" name="quantity8" value=1 placeholder="Enter quantity">
<input type="submit" class="btn8" name="btn8" value="Add+">
<img class="idlyimg" src="bcanorththali.jpg">

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