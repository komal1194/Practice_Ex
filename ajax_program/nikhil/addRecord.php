<?php
$con=mysql_connect("localhost","root","");
$data=json_decode(file_get_contents("php://input"));
$rollno=mysql_real_escape_string($data->rollno);
$name=mysql_real_escape_string($data->name);
$marks=mysql_real_escape_string($data->marks);
mysql_select_db("dbexpert");
mysql_query("insert into stud values($rollno,'$name',$marks)");
echo "Record inserted";
mysql_close($con);
?>