<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("ecommerce_project");
$name=$_REQUEST['name'];
$mobile_no=$_REQUEST['mobile_no'];
$address=$_REQUEST['address'];
$product_name=$_REQUEST['product_name'];
$product_quantity=$_REQUEST['product_quantity'];
$order_date=$_REQUEST['order_date'];

$str="INSERT INTO login_table VALUES('$name',$mobile_no,'$address',
	  '$product_name','$product_quantity','$order_date')";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json[]=$row;
}
echo json_encode($json);
mysql_close($con);

?>