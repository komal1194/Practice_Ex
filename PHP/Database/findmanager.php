<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="SELECT fname,lname FROM empdetails WHERE(managerid IN(SELECT managerid FROM empdetails WHERE managerid not IN(0)))";


$result=mysql_query($str);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['fname']."</td><td>".$row['lname']."</td></tr>";
}
echo "</table>";
mysql_close($con);
?>