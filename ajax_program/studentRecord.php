<?php
$con=mysqli_connect("localhost","root","");
$name=$_REQUEST['name'];
mysqli_select_db($con,"dbexpert");
$result=mysqli_query($con,"select * from stud where name='$name'");
while($row=mysqli_fetch_assoc($result))
{
	$json_arr[]=$row;
}
echo json_encode($json_arr);
mysqli_close($con);
?>