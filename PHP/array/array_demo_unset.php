<?php
$arr=array("red","green","yellow");
echo "<table border=1>";
unset($arr[1]);
array_splice($arr, 1,1);
//$arr=array_values($arr);
for ($i=0; $i<count($arr) ; $i++)
 { 
	echo "<tr><td>".$i."</td><td>".$arr[$i]."</td></tr>";
}
?>