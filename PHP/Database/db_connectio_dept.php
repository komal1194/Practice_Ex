<?php
$deptname=$_GET['deptname'];
$location=$_GET['location'];
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connection created";
}
else
echo "Connection failed".mysql_error();
mysql_select_db("dbexpert");
$str="select * from dept where deptname='$deptname' and 
		location='$location'";
$result=mysql_query($str);
echo "<table border=2>";
echo "<tr><td>".'deptid'."</td><td>".'empname'."</td><td>".'deptname'.
     "</td><td>".'location'."</td></tr>";

while($row=mysql_fetch_array($result))	
{
	echo "<tr><td>".$row['deptid']."</td><td>".$row['empname']."</td><td>".$row['deptname']."</td><td>".$row['location']."</td></tr>";
	
}	
mysql_close();
?>