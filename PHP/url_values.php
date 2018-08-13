<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$courses=$_REQUEST['courses'];
$city=$_REQUEST['city'];


echo "<table border=2>";
echo "<tr><td>fname"."</td><td>".$fname."</td></tr>";
echo "<tr><td>lname"."</td><td>".$lname."</td></tr>";
if(isset($_REQUEST['courses']))
{
	$courses=$_REQUEST['courses'];
}
echo "<tr><td>courses"."</td><td>";

foreach($courses as $value)
{
	echo $value." ";
}
echo "</td></tr>";
if(isset($_REQUEST['city']))
{
	$city=$_REQUEST['city'];
}
echo "<tr><td>city"."</td><td>";
foreach ($city as  $value) {
	echo $value." ";
}
echo "</td></tr>";

echo "</table>";
?>