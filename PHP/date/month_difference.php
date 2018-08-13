<?php
$date1=mktime(1981,10,04);
$date2=mktime(1981,8,04);
$difference=$date1-$date2;
$month=floor($difference/12/5);
echo "The remaining month:--".$month;
?>