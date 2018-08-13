<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$year=$_GET['year'];
$passyear=$_GET['passyear'];
$str="SELECT * FROM passing WHERE year=$year";

$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
mysql_close($con);

?>