<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$rollno=$_GET['rollno'];
$name=$_GET['name'];
$marks=$_GET['marks'];
$str="INSERT INTO stud VALUES('$rollno','$name','$marks')";
$result=mysql_query($str);
mysql_close($con);

//rollno=9&name=akshay&marks=100
?>