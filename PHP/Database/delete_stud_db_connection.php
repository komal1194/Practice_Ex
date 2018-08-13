<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$rollno=$_GET['rollno'];
$str="DELETE FROM stud WHERE rollno='$rollno'";
if(mysql_query($str))
{
	echo "Row deleted".mysql_error();
}
else
{
	echo "Row is not deleted";
}
$str1="select * from stud";
$result=mysql_query($str1);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['rollno']."</td><td>".$row['name']."</td><td>".$row['marks']."</td></tr>";
}
echo "</table>";
mysql_close($con);
?>