<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("ecommerce_project");
$str="SELECT * FROM login_table";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json[]=$row;
}
echo json_encode($json);
mysql_close($con);

?>