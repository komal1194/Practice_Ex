<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("debexpert");
/*$str="SELECT country.country_name, country.region, location.city
	  FROM country INNER JOIN location
	   ON country.country_Id = location.location_id";
*/
$str1="SELECT location.city,location.address,country.country_name
FROM location INNER JOIN country ON location.location_id=country.country_Id";
$result=mysql_query($str1);
echo "<table border=2>";
while($row=mysql_fetch_array($result))	
 {
 	echo "<tr><td>".$row['city']."</td><td>".$row['address']."</td></tr>";
 }
 echo "</table>";
 mysql_close($con);

?>