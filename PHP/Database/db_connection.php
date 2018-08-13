<?php
$con=mysql_connect("localhost","root","");
if($con)
{
echo "Connection created";
}
else
echo "Connection failed".mysql_query();
$str="create database web";
if(mysql_query($str))
{
	echo "Database create";
}
else
{
echo "Database not created".mysql_query();
}

mysql_select_db("web");
$str1="CREATE table employee
	   (empID int not null,
	    primary key(empID),
	    empName varchar(30),
	    city varchar(30),
	    dept varchar(30))";
if(mysql_query($str1))
{
	echo "Table create";
}
else{
echo "Table is not created".mysql_query();
}
$str2="Insert into employee values(100,'Komal','Pune','IT'),
(200,'Pooja','Mumbai','IT'),(300,'Raj','Nashik','Computer')";
if(mysql_query($str2))
{
	echo "Record inserted";
}
else
{
echo "Record failed".mysql_query();
}
mysql_close($con);
?>