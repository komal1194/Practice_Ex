<?php
$color=array("K1"=>"Red","K2"=>"Pink","K3"=>"Green");
//arsort($color);
ksort($color);
echo "<table border=2>";
foreach($color as $key=>$value)
{
	echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
}
echo "</table>";
?>