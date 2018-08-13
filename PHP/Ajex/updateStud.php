<?php
$con=mysqli_connect("localhost","root","");
$name=$_REQUEST['name'];
$mark=$_REQUEST['mark'];
$roll=$_REQUEST['roll'];
mysqli_select_db($con,"dbexpert");
mysqli_query($con,"update stud set name='$name',marks=$mark where rollno=$roll");
mysqli_close($con);
?>