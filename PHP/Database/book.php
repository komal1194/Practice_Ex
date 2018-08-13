<?php
$bookId=$_POST['bookId'];
$bookName=$_POST['bookName'];
$bookPrice=$_POST['bookPrice'];


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
$str="Insert into bookDetails values($bookId,'$bookName',$bookPrice)";
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