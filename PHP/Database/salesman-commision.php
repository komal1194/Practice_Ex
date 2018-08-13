<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
//$str="SELECT cname,sname FROM salesman,customer WHERE sid=cid";
$str="SELECT customer.cname,salesman.sname from salesman,customer where customer.sid=salesman.sid";

//$str1="SELECT * from salesman where scomission>500";

$result=mysql_query($str);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['cname']."</td><td>".$row['sname']."</td></tr>";
}
echo "</table>";
mysql_close($con);
?>


