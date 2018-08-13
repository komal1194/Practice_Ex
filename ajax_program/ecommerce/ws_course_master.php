<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("cdac");

$cmd = $_REQUEST['cmd'];

if( $cmd == 'add') {
	addCourse();
}

if( $cmd == 'update' ) {
	updateCourse();
}

if( $cmd == 'delete') {
    deleteCourse();
}

if( $cmd == 'get' ) {
	$by = $_REQUEST['by'];
	if( $by == 'all') {
		getAllCourses();
	}
	if( $by == 'csid') {
		getCourseById( $_REQUEST['csid'] );
	}	
}

function addCourse() {
	$Course_Name=$_GET['cname'];
	$Course_Status=$_GET['cstatus'];
	$Course_Module=$_GET['cmodule'];
	
	$str="insert into course_master values(Null,'$Course_Name','$Course_Status','$Course_Module')";
	if(mysql_query($str)) 
   	{
	    echo json_encode( array("status" => true ));
    }
    else
    {
		echo json_encode( array("status" => false ));
    }
}

function updateCourse() {
    $Course_Name=$_GET['cname'];
    $Course_Status=$_GET['cstatus'];
    $Course_Id=$_GET['cid'];
    $Course_Module=$_GET['cmodule'];
    $str="UPDATE course_master SET Course_Name='$Course_Name', Course_Status=$Course_Status , Course_Module='$Course_Module' WHERE Course_Id='$Course_Id'";
   if(mysql_query($str))
   {
	    echo json_encode( array("status" => true ));
    }
    else
    {
		echo json_encode( array("status" => false ));
    }
}

function deleteCourse() {
	$Course_Id=$_GET['cid'];
    $str="DELETE FROM course_master WHERE Course_Id=$Course_Id";
    if(mysql_query($str))
    {
	    echo json_encode( array("status" => true ));
    }
    else
    {
		echo json_encode( array("status" => false ));
    }
}

function getAllCourses() {
	$str="SELECT Course_Id,Course_Name,Course_Status,Course_Module FROM course_master";
	$result=mysql_query($str);
	while($row=mysql_fetch_assoc($result))
	{
		$json_array[]=$row;
	}
	echo json_encode($json_array);
}
mysql_close($con);
?>