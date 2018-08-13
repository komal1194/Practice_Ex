<?php
$file=fopen("welcome.txt","a+");
//$file=fopen("welcome.txt","w+");

$txt="This is  new text..";
fwrite($file,$txt);
fclose($file);
?>