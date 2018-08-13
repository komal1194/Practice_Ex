<?php
$file=fopen("welcome.txt", "r");
$size=filesize("welcome.txt");
while (!feof($file))
{
 	echo "<br>".fgets($file);
 	//echo "<br>".fgetc($file);

}
fclose($file);
?>