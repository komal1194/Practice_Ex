<?php
$file=fopen("welcome.txt","r");
$size=filesize("welcome.txt");
echo fread($file,$size);
?>
