<html><head><title>Palindrome of a number</title></head>
<body>
<form method="post">
Enter Number:	<input type="text" name="txt1">
<input type="submit" value="check">
</form></body></html>
<?php
if($_POST)
{
	$txt1=$_POST['txt1'];
	 $reverse=strrev($txt1);
		if($txt1==$reverse)
		{
			echo "The string is Palindrome ";
		}
		else
			echo  "The string is not Palindrome";
	}
	
?>