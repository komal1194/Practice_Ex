<html><head><title>Factorial of a number</title></head>
<body>
<form method="post" >
Enter Number:	<input type="number" name="number">
<input type="submit" value="Factorial">
</form></body></html>

<?php
if($_POST)
{
	$fact=1;
	$number=$_POST['number'];
	for ($i=1; $i<=$number; $i++) 
	{ 
		$fact=$fact*$i;
	}
	echo "Factorial of $number:&nbsp".$fact;
}
?>

