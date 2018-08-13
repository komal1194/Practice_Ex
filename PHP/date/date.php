<?php
echo "Todays date-----".date("d-m-y");
echo "<br><br> Todays date-----".date("D-M-Y");
echo "<br><br> Given date is---".(checkdate(4, 31, 2017)?'valid':'invalid');

$tomorrow=mktime(0,0,0,date("m"),date("d"),date("y"));
echo "<br><br>Tomorrows date is---".date("d/m/y",$tomorrow);

$d=mktime(10,10,10,4,28,2017);
echo "<br><br>Timestamp is----".$d;
echo "<br><br>Create date----".date("Y-M-D h:i:s",$d);

$t=time();
echo "<br><br>Todays Timestamp---".$t;
?>