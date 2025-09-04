<html>
    <head>
        <title>HOTEL</title>
        <link rel="stylesheet" type="text/css" href="project.css">
    </head>
    <body>

        <div class="bigcont">
            <aside class="left">
                <img class="logo" src="bcalogo.png" alt="">
                <br>
                <br>
                <hr>
                <br>
                
                <nav>
                    <a href="project.html">HOME</a>
                    <a href="menu.html">MENU</a>
                    <a href="contact.html">CONTACT</a>
                    <a href="about.html">ABOUT US</a>
                </nav>
            <br/><br/><hr><br/>
            <p>&copy;2024 BCA Foodwala All Rights Reserved
                Design By Adithya, Akshay, Samarth.</p>

            <br>
            <hr>
            </aside>
            <div class="sub">
                <section id="home">
                    <figure>
                      
                        <a href="admin.html" class="admin">
                            
                            <img src="admin.png">
                        </a>
                        <a href="menu.html" class="ordernow">Ordernow</a>
                        <img src="home.jpg" style="width:100%">
                        </a>
                    </figure>
                </section>
            </div>
        </div>
    
 
        <footer>
            <p>&copy;2024 BCA Foodwala All Rights Reserved
                Design By Adithya, Akshay, Samarth.</p>
        </footer>
    </body>
</html>

<?php
$cn=mysqli_connect('localhost','root','','temp');
$qry="truncate table item";
$rs=mysqli_query($cn,$qry);
?>