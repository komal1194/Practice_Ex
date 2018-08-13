<?php
$color=array("blue","red","yellow","pink");
echo "<table border=1>";

for($i=0;$i<count($color);$i++)
{
	echo "<tr><td>".$i."</td><td>".$color[$i]."</td></tr>";
}
echo "</table>";

?>