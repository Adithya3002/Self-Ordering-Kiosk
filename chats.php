<html>
    <head>
        <title>HOTEL</title>
        <link rel="stylesheet" type="text/css" href="chats.css">
    </head>
    <body>
    <form method="post" action="chats1.php">
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
                        $sql = "SELECT name, amount FROM itemlist where id=125";
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
                    <p>Masala puri is a popular South Indian street food made with crispy fried puris topped<br> with a spicy and tangy masala mixture, offering a delightful explosion of flavors in<br> every bite.</p>
                    <input type="number" class="inp" name="quantity1" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn1" name="btn1" value="Add+">
                    <img class="idlyimg" src="masalapuri.jpg">
        
                </section>



                <section class="item2">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=126";
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
                    <p>Pani puri, a popular Indian street snack, comprises crispy hollow puris filled with<br> spicy water and tangy chutneys, offering a burst of flavors in every bite.</p>
                    <input type="number"  class="inp" name="quantity2" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn2" name="btn2" value="Add+">
                    <img class="idlyimg" src="panipuri.jpg">

                </section>


  

                <section class="item3">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=127";
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
                    <p>Sevpuri is a savory Indian street food made of crispy puris filled with potatoes, onions,<br> chutneys, and sev noodles, offering a burst of tangy and spicy flavors in every mouthful.</p>
                    <input type="number" class="inp" name="quantity3" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn3" name="btn3" value="Add+">
                    <img class="idlyimg" src="sevpuri.jpg">
                </section>



                <section class="item4">

<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=128";
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
    <p>Samosa chaat features crispy samosas topped with tangy chutneys, yogurt, and <br> crunchy sev, offering a delightful burst of flavors and textures.</p>
    <input type="number" class="inp" name="quantity4" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn4" name="btn4" value="Add+">
    <img class="idlyimg" src="samosachat.jpg">                
</section>




                <section class="item5">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=129";
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
                    <p>Pav Bhaji is a popular Indian street food dish consisting of spicy mashed vegetables<br> (bhaji) served with buttered bread rolls (pav), creating a flavorful and satisfying meal.</p>
                    <input type="number" class="inp" name="quantity5" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn5" name="btn5" value="Add+">
                    <img class="idlyimg" src="pavbhaji.jpg">      

                </section>
                


                <section class="item6">

<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=130";
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
    <p>BCA Special Cutlet is a savory delight crafted with mixed vegetables, spices,<br> and breadcrumbs, presenting a crispy texture and savory taste in every bite.</p>
    <input type="number" class="inp" name="quantity6" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn6" name="btn6" value="Add+">
    <img class="idlyimg" src="bcaspecialcutlet.jpg">
</section>


      

                <section class="item7">



<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=131";
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
    <p>BCA Special Vada Pav features a spicy potato patty tucked inside soft pav buns,<br>adorned with tangy chutneys, delivering a burst of flavors in every bite.</p>
    <input type="number" class="inp" name="quantity7" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn7" name="btn7" value="Add+">
    <img class="idlyimg" src="bcaspecialvadapav.jpg">
</section>

   

                <section class="item8">

<?php
    $conn = new mysqli("localhost", "root", "", "temp");
    $sql = "SELECT name, amount FROM itemlist where id=132";
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
<p>BCA Special Mix Chaat is a flavorful fusion of crispy puris, assorted snacks,<br>Crispy puffed rice, chutneys, and veggies, creating a delightful explosion of<br> taste and texture.</p>
<input type="number" class="inp" name="quantity8" value=1 placeholder="Enter quantity">
<input type="submit" class="btn8" name="btn8" value="Add+">
<img class="idlyimg" src="bcaspecialmixchat.jpg">

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