<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");

$str="ALTER TABLE country CHANGE country_Id stud_id INT( 10 ) NOT NULL";

if(mysql_query($str))
{
	echo "table alter";
}
else
{
	echo "table is not alter".mysql_error();
}
?>






