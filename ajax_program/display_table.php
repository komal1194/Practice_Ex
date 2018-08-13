<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$result=mysql_query("select * from bookdetails");
while($row=mysql_fetch_assoc($result))
{
	$json_arr[]=$row;
}
echo json_encode($json_arr);
mysql_close($con);
?>