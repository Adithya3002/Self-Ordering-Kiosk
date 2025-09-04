<html>
    <head>
        <title>HOTEL</title>
        <link rel="stylesheet" type="text/css" href="north.css">
    </head>
    <body>
        <form method="post" action="north1.php">
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
                    <p>It is a flatbread that is baked in a tandoor. It is often covered in herbs and spices.<br> Naan bread is made from basic bread ingredients like wheat flour, salt, and butter or ghee.</p>
                    <input type="number" class="inp" name="quantity1" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn1" name="btn1" value="Add+">
                    <img class="idlyimg" src="butternaan.jpg">
        
                </section>

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
                    <p>Paneer Butter Masala, also known as butter paneer is a rich & creamy curry made<br> with paneer, spices, onions, tomatoes, cashews and butter. As the name denotes, the curry <br> is cooked in butter which imparts it's characteristic buttery flavor to the dish</p>
                    <input type="number"  class="inp" name="quantity2" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn2" name="btn2" value="Add+">
                    <img class="idlyimg" src="pannerbutermasala.jpg">

                </section>



                <section class="item3">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 2";
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
                    <p>Matar paneer recipe is a popular Indian Curry dish made with green peas and Paneer<br>  in a base of onions, tomatoes, cashews, spices and herbs. The recipe hails from the <br>versatile Northern Indian cuisine that has many different (and delicious) variations</p>
                    <input type="number" class="inp" name="quantity3" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn3" name="btn3" value="Add+">
                    <img class="idlyimg" src="mutterpaner.jpg">
                </section>

                <section class="item4">

                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 3";
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
                    <img class="idlyimg" src="kholapuri.jpg">                
                </section>


                <section class="item5">
                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 4";
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
                    <img class="idlyimg" src="daltadka.jpg">      

                </section>
                
                <section class="item6">

                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 5";
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
                    <p>Chole Bhature is a popular North Indian dish featuring spicy chickpea curry (chole)<br> paired with deep-fried bread (bhature), often served with pickled onions or green chilies.<br>It's a hearty and flavorful combination enjoyed as a main dish or street food.</p>
                    <input type="number" class="inp" name="quantity6" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn6" name="btn6" value="Add+">
                    <img class="idlyimg" src="cholebhature.jpg">
                </section>

                <section class="item7">



                <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 6";
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
                    <p>"Veg Handi Biriyani” refers to the vessel in which the biryani is cooked, authentically,<br> the biryani is made in two ways. The rice cooked is par boiled with some flavorful<br> spice and the masala for the biryani is made separated</p>
                    <input type="number" class="inp" name="quantity7" value=1 placeholder="Enter quantity">
                    <input type="submit" class="btn7" name="btn7" value="Add+">
                    <img class="idlyimg" src="handibiriyani.jpg">
                </section>

                <section class="item8">

                    <?php
                        $conn = new mysqli("localhost", "root", "", "temp");
                        $sql = "SELECT name, amount FROM itemlist LIMIT 1 OFFSET 7";
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
                    <p>North Indian special thali is a traditional meal platter featuring a variety of dishes like<br> curries, dal, vegetables, rice, roti, and desserts, offering a complete and balanced dining<br> experience.</p>
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





