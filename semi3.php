<?php
$cookie_name="user"
$cookie_value="hi"

setcookie($cookie_name,$cookie_value,time()+(86400),"/");
?>
<html>
<body>
<?php
echo $_COOKIE[$cookie_name];
?>

