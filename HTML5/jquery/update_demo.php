<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
//$rollno=$_GET['rollno'];
$name=$_GET['name'];
$rollno=$_GET['rollno'];
$str="update stud set name='$name' where rollno='$rollno'";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json_arr[]=$row;
}
echo json_encode($json_arr);
mysql_close($con);


?>