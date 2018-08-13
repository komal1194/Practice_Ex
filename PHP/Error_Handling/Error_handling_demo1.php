<?php
function customError($errno,$errstr)
{
	echo "<b> Error no.</b>[$errno]--$errstr<br>";
	echo "Ending of a script";
	die();
	echo "Hi";
}
set_error_handler("customError",E_USER_WARNINIG);
$test=20;
if($test>10)
{
	trigger_error("Value must be 10 or below 10",E_USER_WARNINIG);
}
?>
