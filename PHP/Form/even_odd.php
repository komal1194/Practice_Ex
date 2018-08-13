<html><head><title>Even Odd of a number</title></head>
<body>
<form method="post">
Enter Number:	<input type="number" name="number">
<input type="submit" value="Check">
</form></body></html>

<?php
if ($_POST)
{
	$number=$_POST['number'];
	if(($number%2)==0)
	{
		echo "The number is even"."<br>".$number;

	}
else{
		echo "The number is odd"."<br>".$number;
}
}
?>