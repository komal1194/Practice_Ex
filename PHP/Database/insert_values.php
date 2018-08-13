<?php


$btn1=$_GET['btn1'];


$con=mysql_connect("localhost","root","");
if($con)
{
	echo "Connection creatd";
}
else
{
	echo "Connection failed".mysql_error();
}
mysql_select_db("dbexpert");
if(isset($_GET['btninsert']))
{
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$birth_date=$_GET['bdate'];
$str="insert into student_infor value('$fname','$lname','$birth_date')";
if(mysql_query($str))
{
echo "Record inserted";
}
else
{
	echo "Record not inserted".mysql_error();
}
}

if(isset($_GET['btndisplay']))
{
$str1="select * from student_infor";
$result=mysql_query($str1);
echo "<table border=2>";
while($row=mysql_fetch_array($result))
{	
	echo "<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>"
	.$row['birth_date']."</td></tr>";
	
}
echo "</table>";
}
mysql_close($con);

?>