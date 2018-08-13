<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");

$str1="SELECT salesman.sname,customer.cname FROM 
	   customer INNER JOIN salesman ON customer.sid=salesman.sid 
	   WHERE salesman.scomission>500";
$result=mysql_query($str1);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['cname']."</td><td>".$row['sname']."</td></tr>";
}
echo "</table>";
mysql_close($con);
?>


