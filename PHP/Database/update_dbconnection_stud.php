<?php
$name=$_GET['name'];
$marks=$_GET['marks'];
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="UPDATE stud set marks='$marks' where name='$name'";
if(mysql_query($str))
{
	echo "Row updated";
}
else
{
	echo "Row not updated".mysql_error();
}
$str1="select * from stud";
$result=mysql_query($str1);
echo "<table border=1>";

while($row=mysql_fetch_array($result))
{
echo "<tr><td>".$row['rollno']."</td><td>".$row['name']."</td><td>".$row['marks']."</td></tr>";
}
echo "</table>";

mysql_close($con);
?>