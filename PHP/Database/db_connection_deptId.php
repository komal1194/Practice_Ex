<?php
$deptid=$_GET['deptid'];
$btnclick=$_GET['btnclick'];
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
if(isset($_GET['btndisplay']))
{
$str="select * from dept where deptid='$deptid'";
$result=mysql_query($str);
echo "<table border=2>";

while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['deptid']."</td><td>".$row['empname']."</td><td>".$row['deptname']."</td><td>".$row['location']."</td></tr>";
}
echo "</table>";
mysql_close($con);
}
?>