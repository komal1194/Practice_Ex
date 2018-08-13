<?php
$con=mysqli_connect("localhost","root","");
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$price=$_REQUEST['price'];
mysqli_select_db($con,"dbexpert");
mysqli_query($con,"insert into cart values($id,'$name',$price)");
mysqli_close($con);
?>