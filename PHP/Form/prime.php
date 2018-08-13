<html><head><title>Prime of a number</title></head>
<body>
<form method="post">
Enter Number:	<input type="number" name="number">
<input type="submit" value="Prime">
</form></body></html>
<?php
if($_POST)
{
	$number=$_POST['number'];
	for ($i=2; $i<=$number-1; $i++) 
	{ 
		if($number%$i==0)
		{
			$value=True;
		}
	}
	if(isset($value)&&$value)
	{
		echo "The number'.$number.'is not prime";
	}
	else
		echo "The number'.$number.'is prime
	";

}
?>