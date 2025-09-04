<html>
    <head>
        <title>HOTEL</title>
        <link rel="stylesheet" type="text/css" href="south.css">
    </head>
    <body>
    <form method="post" action="south1.php">
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
                    <a href="north.php">NORTH INDIAN</a>
                    <a href="chinese.php">CHINESE</a>
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
                        $sql = "SELECT name, amount from itemlist where id=109";
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
                    <input type="number" class="inp" name="quantity1" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn1" name="btn1" value="Add+">
                    <img class="idlyimg" src="idly.jpg">
        
                </section>


              

                <section class="item2">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=111";
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
                    <input type="number"  class="inp" name="quantity2" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn2" name="btn2" value="Add+">
                    <img class="idlyimg" src="vada.jpg">

                </section>

               
                <section class="item3">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=110";
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
                    <p>Riced with belebath</p>
                    <input type="number" class="inp" name="quantity3" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn3" name="btn3" value="Add+">
                    <img class="idlyimg" src="bisibele.jpg">
                </section>

      
                <section class="item4">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=112";
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
                    <p>Cripsy dosa with a smear of garlic chutney and potato masala.<br> Served with Chutney and Sambar. Potato masala provided separately to maintain the<br> crisp of the dosa</p>
                    <input type="number" class="inp" name="quantity4" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn4" name="btn4" value="Add+">
                    <img class="idlyimg" src="masala.jpg">                
                </section>


 

                      
            
                <section class="item5">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist where id=113";
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
                    <p>It consists of two components: "chow chow," which refers to savory semolina or<br> rava upma, and "bath," which is a sweet and spicy mixture of semolina or rava.</p>
                    <input type="number" class="inp" name="quantity5" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn5" name="btn5" value="Add+">
                    <img class="idlyimg" src="chowchowbath.jpg">      

                </section>



                
 

                <section class="item6">

<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=114";
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
    <p>Uttapam is a savory South Indian pancake made from fermented rice and lentil<br> batter, often topped with vegetables like tomatoes, onions, and chilies. It's crispy on the<br> outside and soft on the inside, bursting with flavors.</p>
    <input type="number" class="inp" name="quantity6" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn6" name="btn6" value="Add+">
    <img class="idlyimg" src="oniondosa.jpg">
</section>



                <section class="item7">



<?php
        $conn = new mysqli("localhost", "root", "", "temp");
        $sql = "SELECT name, amount FROM itemlist where id=115";
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
    <p>Hyderabadi veg biryani is a popular rice dish from the city of Hyderabad in India.<br> It is a flavorful and aromatic dish that is made with layers of fragrant long-grain<br> Basmati rice, mixed vegetables, and a blend of spices.</p>
    <input type="number" class="inp" name="quantity7" value=1 placeholder="Enter quantity">
    <input type="submit" class="btn7" name="btn7" value="Add+">
    <img class="idlyimg" src="hyderbadi.jpg">
</section>

                

                <section class="item8">

<?php
    $conn = new mysqli("localhost", "root", "", "temp");
    $sql = "SELECT name, amount FROM itemlist where id=116";
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
<p>A South Indian culinary treasure, featuring a delectable assortment of Bisi Bele Bath,<br>Three types of Palya, Coconut Chutney,Poori, Parrota,Bajj,Two types of sweets,<br>Veg.Biriyani offering a symphony of flavors and textures in one satisfying meal<br>we will offer BCA Special Sweet Pan</p>
<input type="number" class="inp" name="quantity8" value=1 placeholder="Enter quantity">
<input type="submit" class="btn8" name="btn8" value="Add+">
<img class="idlyimg" src="south.jpg">

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