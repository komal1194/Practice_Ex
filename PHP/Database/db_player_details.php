<?php
$city=$_GET['city'];
$game=$_GET['game'];

$con=mysql_connect("localhost","root","");
if($con)
{
	echo "connection created";
}
else
{
	echo "connection failed".mysql_error();
}
mysql_select_db("dbexpert");
$str="select * from player where city='$city' or game='$game'";
$result=mysql_query($str);
echo "<table border=2>";
echo "<tr><td>".'PId'."</td><td>".'Pname'."</td><td>".'city'.
     "</td><td>".'game'."</td></tr>";

while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['pId']."</td><td>".$row['pname']."</td><td>".$row['city']."</td><td>".$row['game']."</td></tr>";
	

}
echo "</table>";
mysql_close($con);
?>