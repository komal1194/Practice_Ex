<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="SELECT sname,cname FROM customer, salesman WHERE scity=ccity";
$result=mysql_query($str);
echo "<table border=2>";
//echo "<tr><td>".'sname'.;
while ($row=mysql_fetch_array($result)) {
	echo "<tr><td>".$row['sname']."</td><td>".$row['cname']."
	</td></tr>";
}
echo "</table>";
mysql_close($con);
?>