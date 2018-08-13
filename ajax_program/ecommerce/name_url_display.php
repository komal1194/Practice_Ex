<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("ecommerce_project");
$name=$_REQUEST['name'];
$str="SELECT * FROM login_table WHERE name='$name'";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json[]=$row['name']." ".$row['mobile_no']." ".$row['address']." ".$row['product_name']." ".$row['product_quantity']." ".$row['order_date'];
}
echo json_encode($json);
mysql_close($con);

?>