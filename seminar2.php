<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="seminar2.css" >
</head>
<body>
<?php 
    $error=array();
    if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['pass'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        
        if(empty($username))
        {
            $error[]="You have not entered the name<br>";
        }
        else
        {
            if (substr($username, 0, 1) !== '_')
            {
                $error[]="Username must start with an underscore";
            }
            else
            {        
                    if (!preg_match('/^[a-zA-Z_]+$/', $username)) 
                    {
                        $error[]="Username must contain only alphabetic characters";
                    } 
             }
            
        }

        
       








        if(empty($password))
        {
            $error[]="Please enter the password<br>";
        }
        else
        {
            if (!(preg_match('/[A-Za-z]/', $password) && preg_match('/[0-9]/', $password))) {
                $error[]="Password must contain at least one <br>alphabetic character and one number";
            }
        }


        if(empty($number))
        {
            $error[]="Please enter a number<br>";
        }
        else
        {
            if (strlen($number) < 11) 
            $error[]="Phone number must be at least 10 digits.";
            if (strlen($number) > 11) 
            $error[]="Phone number must not exceed 10 digits.";
        }



        if(empty($email))
        {
            $error[]="Please enter a valid mail";
        }
        else
        {
            if (substr($email, -10) !== "@gmail.com") {
                $error[]="Please enter @gmail.com";
            }
        }  

        if(!$error){
            echo "<div class='cnt'>";
            echo "<h2>Welcome " . $_POST['username'] . "😊" . "</h2>";
            echo "<p>This is a secured area...You are logged in!!</p><br><br>";
            echo "<p class='p1'>Click here to <a href='seminar.php'>Logout</a></p>";
            echo "</div>";
        }
        else
        {
                session_start(); 
                $_SESSION['errors'] = $error; 
                header("Location: seminar3.php"); 
                exit(); 
            
            
        }
    }
?>
</body>
</html>
