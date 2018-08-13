<?php
$pname=$_GET['pname'];
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="select * from player where pname='$pname'";
$result=mysql_query($str);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>".$row['pId']."</td><td>".$row['pname']."</td><td>".$row['city']."</td><td>".$row['game']."</td></tr>";

}
echo "</table>";
?>