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
$str2="Insert into stud values(5,'D',80),
		(6,'E',45)";
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


