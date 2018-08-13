<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");

$bookId=$_REQUEST['bookId'];
$bookName=$_REQUEST['bookName'];
$price=$_REQUEST['price'];

$str=("insert into cart values($bookId,'$bookName',$price)");
$result=mysql_query($str);
while (mysql_fetch_assoc($result)) 
{
	$array[]=$row;
}
echo json_encode($array);

mysql_close($con);
?>