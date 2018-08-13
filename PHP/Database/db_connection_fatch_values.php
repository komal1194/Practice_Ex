<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connection created";
}
else
{
	echo "Connection failed".mysql_error();
}
mysql_select_db("dbexpert");
$str="select * from stud";
$result=mysql_query($str);
while($row=mysql_fetch_array($result))
{
//echo "<br>".$row['rollno']." ".$row['name']." ".$row['marks']."<br>";
	echo "<br>".$row['name'];
}
mysql_close($con);
?>