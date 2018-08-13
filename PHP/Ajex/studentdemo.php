<?php  
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$name=$_GET['name'];
//$str="SELECT * FROM stud where name='$name'";
$result=mysql_query("SELECT * FROM stud where name='$name'");
while($row=mysql_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
mysql_close($con);
?>