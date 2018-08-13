<?php
$date1=date('2011-1-1');
$date2=date('2011-5-2');
echo "date1 :: ".$date1."<br>";
echo "date2 :: ".$date2."<br>";
$date_diff=strtotime($date2)-strtotime($date1);
echo "date difference in months => ".floor(($date_diff)/2628000)." months <br>";
?>