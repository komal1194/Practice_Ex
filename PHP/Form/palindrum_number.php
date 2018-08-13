<html><head><title>Palindrome of a number</title></head>
<body>
<form method="post">
Enter Number:	<input type="number" name="number">
<input type="submit" value="Palindrome">
</form></body></html>
<?php
if($_POST)
{
	$number=$_POST['number'];
	 $reverse=strrev($number);
		if($number==$reverse)
		{
			echo "The number $number is Palindrome ";
		}
		else
			echo "The number $number is not Palindrome ";
	}
	
?>