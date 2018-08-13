<?php  
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");
$rollno=$_GET['rollno'];
$str="SELECT * FROM stud where rollno='$rollno'";
$result=mysql_query($str);
while($row=mysql_fetch_assoc($result))
{
	$json_array[]=$row;
}
echo json_encode($json_array);
mysql_close($con);
?>