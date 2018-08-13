<?php
$con=mysql_connect("localhost","root","");
$name=$_REQUEST['name'];
$marks=$_REQUEST['marks'];
$rollno=$_REQUEST['rollno'];
mysql_select_db("dbexpert");
$str="update stud set name='$name',marks=$marks where rollno=$rollno";
$result=mysql_query($str);
mysql_close($con);
?>