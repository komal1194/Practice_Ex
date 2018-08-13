<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="select * from(select salary from employess ORDER BY salary DESC LIMIT 2)AS employess ORDER BY salary limit 1";
//$str="select * from employess order by salary desc limit 1 offset 1"
$result=mysql_query($str);
echo "<table border=2>";
echo "<tr><td>".'eno'."</td><td>".'ename'."</td><td>".'salary'."</td><td>".'address'."</td></tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['eno']."</td><td>".$row['ename']."</td><td>".$row['salary']."</td><td>".$row['address']."</td></tr>";
}
echo "</table>";
mysql_close($con);
?>