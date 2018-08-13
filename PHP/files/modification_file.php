<?php
$file=filemtime("welcome.txt");
echo "Last modified date is:".date('d-m-y h:m:s',$file);
$file1=fileatime("wel.txt");
echo "<br><br>Access time is:".date('d-m-y h:m:s',$file);
$f=file_put_contents("wel.txt", "Hiiiiii");
echo $f;



?>