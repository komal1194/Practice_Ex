<?php
$x=10;
function fun()
{
	$GLOBALS["x"]++;//its superglobal variable
	echo "Incremented value--".$GLOBALS["x"];
}
fun();
?>