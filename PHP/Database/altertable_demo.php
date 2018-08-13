<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");

$str="ALTER TABLE country DROP country_id,ADD country_Id int(10) FIRST";

if(mysql_query($str))
{
	echo "table alter";
}
else
{
	echo "table is not alter".mysql_error();
}
mysql_close($con);
?>






