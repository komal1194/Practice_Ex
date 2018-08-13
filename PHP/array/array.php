<?php
$color=array("blue","red","yellow","pink");
echo "<ul>";
rsort($color);//sort()   sortng an indexed array


for($i=0;$i<count($color);$i++)
{
	echo "<li>$color[$i]</li>";
	//echo"<br>$color[$i]";
}
echo "</ul>";

?>