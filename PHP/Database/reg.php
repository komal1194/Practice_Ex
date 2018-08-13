<?php
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$dob=$_POST['dob'];
$sadd=$_POST['sadd'];
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connected created";
}
else
{
	echo "Connection failed".mysql_error();
}
mysql_select_db("dbExpert");
$str="Insert into reg values($sid,'$sname',$dob,'$sadd')";
if (mysql_query($str)) 
{
	echo "Record inserted";
}
else
{
	echo "Record not inserted".mysql_error();
}

mysql_close();


?>