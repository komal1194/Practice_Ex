<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connection done";
}
else
{
	echo "Connection failed".mysql_error();
}
mysql_select_db("web");
$str=
"SELECT officers.officer_name, officers.address, students.cource_name
FROM officers 
INNER JOIN students
ON officers.officer_id = students.student_id";

/*$str="SELECT officers.officer_name,officers.address
	FROM officers 
	 NATURAL JOIN students";
*/
$result=mysql_query($str);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['officer_name']."</td><td>".$row['address']."</td><td>".$row['cource_name']."</td></tr>";
}
echo "</table>";
mysql_close($con);

?>