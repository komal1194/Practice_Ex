<?php
$bday=mktime(0,0,0,1,1,2018);
$today=time();
$difference=$today-$bday;
$days=floor($difference/86400);
echo "The remaining days:--".$days;

?>