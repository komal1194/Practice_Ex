<?php 

$name=$_GET['name'];
$marks=$_GET['marks'];
$rollno=$_GET['rollno'];

$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="UPDATE stud set name='$name',marks=$marks WHERE rollno=$rollno";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
mysql_close($con);
?>