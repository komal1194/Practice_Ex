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
mysql_select_db("dbexprt");
$str=
"SELECT country1.country_id,country1.region_id,location1.address
FROM country1 
INNER JOIN location1
ON country1.country_id = location1.location_id"; 
$result=mysql_query($str);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['country_name']."</td><td>".$row['region_id']."</td><td>".$row['address']."</td></tr>";
}
echo "</table>";
mysql_close($con);

?>