<?php
$x=11;
function fun()
{
global $x;
$x++;
	echo "Incremented value--".$x;
}
fun();
?>