<?php
$did=$_GET['did'];
$salary=$_GET['salary'];
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="SELECT dname, SUM(salary) AS salary from 
department GROUP BY dname";
$result=mysql_query($str);
echo "<table border=2>";
echo "<tr><td>".'dname'."</td><td>".'salary'."</td></tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['dname']."</td><td>".$row['salary']."</td></tr>";
}
echo "</table>";
mysql_close($con);
?>