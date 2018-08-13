<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$name=$_GET['name'];
$mobile_no=$_GET['mobile_no'];
$address=$_GET['address'];
$product_name=$_GET['product_name'];
$product_quantity=$_GET['product_quantity'];
$order_date=$_GET['order_date'];

$str="INSERT INTO ecom_login VALUES('$name',$mobile_no,'$address','$product_name',$product_quantity,'$order_date')";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
mysql_close($con);
?>