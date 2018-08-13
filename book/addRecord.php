<?php
$con=mysql_connect("localhost","root","");
$data=json_decode(file_get_contents("php://input"));
$bookid=mysql_real_escape_string($data->bookid);
$author=mysql_real_escape_string($data->author);
$status=mysql_real_escape_string($data->status);
mysql_select_db("dbexpert");

$str="INSERT INTO bookdetails1(bookid,author,status)VALUES
		('$bookid','$author','$status')";
$result=mysql_query($str);
echo "Record inserted";
mysql_close($con);
?>