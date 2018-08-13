<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connection created";
}
else
{
	echo "Connection Failed";
}
mysql_select_db("dbexpert");
$str="select * from stud";
$result=mysql_query($str);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['rollno']."</td><td>".$row['name']."</td><td>".$row['marks']."</td></tr>";
}
	echo "</table>";

mysql_close($con);
?>