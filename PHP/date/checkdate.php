<html>
<form method="post" action=checkdate.php>
Enter Date:-&nbsp<input type="text" name="txt1"><br><br>
<input type="submit" value="submit">&nbsp
<input type="reset" value="reset">
</form>
<html>

<?php
$txt1=$_POST['txt1'];
list($y,$m,$d)=explode('-', $txt1);
if(checkdate($m, $d, $y))
{
	echo "valid";
}
else
{
	echo "Invalid";
}
?>