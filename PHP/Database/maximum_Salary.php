<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="select * from employeedetails where salary=(select max(salary)from employeedetails)";
$result=mysql_query($str);
echo "<table border=2>";
echo "<tr><td>".'empid'."</td><td>".'fname'."</td><td>".'lname'."</td><td>".'hiredate'."</td><td>".'salary'."</td></tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['empid']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['hiredate']."</td><td>"
	.$row['salary']."</td></tr>";
}
echo "</table>";
mysql_close($con);
?>