<?php
function fun()
{
	$user[]="Bitcode";
	$user[]="bitcodetech@gmail.com";
	$user[]="PHP";
	return $user;
}
list($Name,$Email,$Lang)=fun();
echo "Name: $Name<br>Email: $Email<br>Lang: $Lang";
?>