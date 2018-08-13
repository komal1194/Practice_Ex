<?php
//$email=$_GET['email'];
$deptid=$_GET['deptid'];

$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="UPDATE deptdetails SET email='not available' where 
	deptid=$deptid";
if(mysql_query($str))
{
	echo "Row updated";
}
else
{
	echo "Row not updated".mysql_error();
}
$str1="select * from deptdetails where deptid=$deptid";
$result=mysql_query($str1);
echo "<table border=2>";
echo "<tr><td>".'deptid'."</td><td>".'dname'."</td><td>".'city'."</td><td>".'email'."</td></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td>".$row['deptid']."</td><td>".$row['dname']."</td><td>"
.$row['city']."</td><td>".$row['email']."</td></tr>";
}

/*$str2="delete from deptdetails where deptid='$deptid'";
if(mysql_query($str2))
{
	echo "Row deleted";
}
else
echo "Row  is not deleted";*/
echo "</table>";
mysql_close($con);
?>