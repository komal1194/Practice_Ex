<?php
$fname=$_GET['txt_fname'];
$lname=$_GET['txt_lname'];
$gender=$_GET['gender'];
$city=$_GET['city'];

echo "<table border=3>";
echo "<tr><td>FName"."</td><td>".$fname."</td></tr>";
echo "<tr><td>LName"."</td><td>".$lname."</td></tr>";
echo "<tr><td>Gender"."</td><td>".$gender."</td></tr>";
echo "<tr><td>City"."</td><td>".$city."</td></tr>";

if(isset($_REQUEST['hobbies']))
{
	$hobbies=$_REQUEST['hobbies'];
}
echo "<tr><td>Hobbies"."</td><tr>";
foreach ($hobbies as  $value) 
{
	echo "<td>".$value."</td>";
}


?>