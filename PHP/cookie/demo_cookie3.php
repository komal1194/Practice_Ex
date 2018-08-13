<?php
$cookie_name=$_GET['cookie_name'];
$cookie_value=$_GET['cookie_value'];
setcookie($cookie_name,$cookie_value,time()+(86400*30));
echo $_COOKIE[$cookie_name];

?>