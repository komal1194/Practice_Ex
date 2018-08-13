<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$str="SELECT * FROM stud";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
mysql_close($con);
?>