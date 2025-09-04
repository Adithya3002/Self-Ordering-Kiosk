<html>
    <head>
        <title>Armstrong number</title>
    </head>
    <body>
        <form action="" method="post">
        Enter the number:&nbsp <input type="text" name="inp">
        <input type="submit" name="btn" value="check">
    </body>
</html>
<?php 
function isarmstrong($i)
{
    $x=(int)(strlen($i));
    $temp=$i;
    $sum=0;
    while($temp>0)
    {
        $rem=$temp%10;
        $sum=$sum+pow($rem,$x);
        $temp=$temp/10;
    }
    if($sum==$i)
        return 1;
    else 
        return 0;

}


if(isset($_POST['inp']))
{
    $inp=(int)$_POST['inp'];
    if(isset($_POST['btn']))
    {
        if($inp==0)
        {
            echo "enter a valid positive number<br>";
        }
        else if($inp<0)
        {
            echo "enter a valid positive number<br>";
        }
        else{
            if(isarmstrong($inp))
            {
                echo $inp."is a armstrong number<br>";
                echo "the arm number from 1 to".$inp."are <br>";
                for($i=1;$i<$inp;$i++)
                {
                    if(isarmstrong($i))
                    {
                        echo($i." ");
                    }
                }
            }
            else 
                echo $inp."it is not a armstrong number";    
        }
    }

}
?>
