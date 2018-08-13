<html><head><title>Armstrong of a number</title></head>
<body>
<form method="post">
Enter Number:	<input type="number" name="number">
<input type="submit" value="Armstrong">
</form></body></html>
<?php
if($_POST)
{
	$number=$_POST['number'];
	$a=$number;
	$sum=0;
		while($a!=0)
		{
			$rem=$a%10;
			$sum=$sum+($rem*$rem*$rem);
			$a=$a/10;
		}
		if($number==$sum)
		{
			echo "The number $number is Armstrong ";
		}
		else
			echo "The number $number is not Armstrong ";
	}


	
?>