<?php
$con=mysql_connect("localhost","root","");
$data=json_decode(file_get_contents("php://input"));
$rollno=mysql_real_escape_string($data->roll);
mysql_select_db("dbexpert");
mysql_query("delete from stud where rollno=$rollno");
mysql_close($con);
?>