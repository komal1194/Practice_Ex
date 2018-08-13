<?php
$empid=$_GET['empid'];
$salary=$_GET['salary'];
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="UPDATE employeedetails SET salary='$salary' 
		where empid='$empid' ";
if(mysql_query($str))
{
	echo "Row updated";
}
else
echo "Row is not updated".mysql_error();
$str1="select * from employeedetails where salary=$salary and empid=$empid";
$result=mysql_query($str1);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td>".$row['empid']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['hiredate']."</td><td>".$row['salary']."</td></tr>";
}
echo "</table>";
mysql_close($con);


?>