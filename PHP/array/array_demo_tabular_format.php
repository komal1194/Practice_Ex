<?php

$color1=$_REQUEST['color1'];
$color2=$_REQUEST['color2'];
$color3=$_REQUEST['color3'];

$color=array($color1,$color2,$color3);
foreach ($color as $value)
{
	echo " ";

}
echo "<table border=2>";
echo "<tr><td>Index"."</td><td>"."Color</td></tr>";
echo "<tr><td>0"."</td><td>".$color1."</td></tr>";
echo "<tr><td>1"."</td><td>".$color2."</td></tr>";
echo "<tr><td>2"."</td><td>".$color3."</td></tr>";
echo "</table>";	

?>