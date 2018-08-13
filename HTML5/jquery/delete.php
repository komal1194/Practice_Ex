<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
	$rollno=$_GET['rollno'];
	$name=$_GET['name'];
	$marks=$_GET['marks'];
 
 	$str2="DELETE FROM stud WHERE rollno='$rollno'";
	$result=mysql_query($str2);
 
mysql_close($con);
?>