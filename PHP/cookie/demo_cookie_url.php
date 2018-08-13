<?php
$player_name=$_GET['player_name'];
$game=$_GET['game'];
setcookie($player_name,$game,time()+(86400*30));
echo $_COOKIE[$player_name];

?>