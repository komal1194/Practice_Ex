<?php
$fname=$_GET['fname'];

$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connection created";
}
else
{
	echo "Connection Failed".mysql_error();
}
mysql_select_db("dbexpert");
$str="select birth_date from student_infor where fname='$fname'";
$result=mysql_query($str);
while($row=mysql_fetch_array($result))
{
	echo " ".$row['birth_date'];
}
mysql_close($con);

?>