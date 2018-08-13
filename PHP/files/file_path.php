<?php
$pathinfo=pathinfo("PHP/xampp/htdocs/bitcode/PHP/files/file_path.php");
printf("Dirctory name:%s<br><br>",$pathinfo['dirname']);
printf("Basename:%s<br><br>",$pathinfo['basename']);
printf("Filename is:%s<br><br>",$pathinfo['filename']);
printf("File extension is:%s<br><br>",$pathinfo['extension']);
?>