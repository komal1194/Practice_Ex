<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "connection  is created";
}
else
{
	echo "<br>connection failed".mysql_error();
}
/*$str="CREATE Database dbExpert";

if(mysql_query($str))
{
	echo "<br>Database created";
}
else
{
	echo "<br>Database failed".mysql_error();
}*/
mysql_select_db("dbExpert");

$str1="CREATE Table stud
		(rollno int NOT NULL,
		 PRIMARY KEY(rollno), 
		 name varchar(25),
		  marks int)";
if(mysql_query($str1))
{
	echo "<br>Table created";
}
else
{
	echo "<br>Table is not created".mysql_error();
}
$str2="Insert into stud values(1,'Komal',80)";
if (mysql_query($str2)) 
{
	echo "Record inserted";
}
else
{
	echo "Record not inserted".mysql_error();
}



mysql_close($con);

?>


