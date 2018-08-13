<?php
$number=$_REQUEST['number'];
for($i=1;$i<=10;$i++)
{
	echo "<br>".$number."*".$i."=". ($number*$i);
}
?>