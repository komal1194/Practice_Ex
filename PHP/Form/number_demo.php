<?php
$number=$_GET['number'];
$cnt=1;
for($i=$number;$i>0;$i--)
{
	for($j=$i;$j<$number+1;$j++)
	{
		echo " ".$cnt;
		$cnt++;
	}
	echo "<br>";
}

?>