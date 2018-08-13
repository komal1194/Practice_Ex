<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connection created";
}
else
{
	echo "Connection failed".mysql_error();
}
mysql_select_db("dbexpert");
if(isset($_GET['btninsert']))
{
	$name=$_GET['name'];
	$marks=$_GET['marks'];
$str="insert into studentdemo values(NULL,'$name',$marks)";	
if(mysql_query($str))
{
	echo "Row inserted";
}
else
{
	echo "Row is not inserted".mysql_error();
}
}
mysql_close($con);
?>