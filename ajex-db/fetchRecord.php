<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="select * from stud";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json_arr[]=$row;
}
echo json_encode($json_arr);
mysql_close($con);
?>