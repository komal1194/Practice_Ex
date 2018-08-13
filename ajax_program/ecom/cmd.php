<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("dbexpert");

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
	if( $by == 'did') {
		getOrderById( $_REQUEST['did'] );
	}	
}

function addCourse() {
	$did=$_GET['did'];
	$dname=$_GET['deptname'];
	$dloc=$_GET['deptlocation'];
	
	$str="INSERT INTO depart(deptid,deptname,deptlocation) VALUES($did,'$dname','$dloc')";
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
    $did=$_GET['did'];
    $dname=$_GET['deptname'];
    $dloc=$_GET['deptlocation'];
  
    $str="UPDATE depart SET deptname='$dname',deptlocation='$dloc' WHERE deptid=$did";
   if(mysql_query($str))
   {
	    echo json_encode( array("status" => true ));
    }
    else
    {
		echo json_encode( array("status" => false ));
    }
    /*$str1="SELECT * FROM depart";
    $result=mysql_query($str1);
    if(mysql_query($str1))
   {
	    echo "updated";
    }
    else
    {
		echo "not updated";
    }*/
    //getAllCourses();

}

function deleteCourse() {
	$did=$_GET['did'];
    $str="DELETE FROM depart WHERE deptid=$did";
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
	//alert("this is getallcourses");
	//echo "this is getallcourses";
	$str="SELECT deptid,deptname,deptlocation FROM depart";
	$did=$_GET['did'];
	//$str="SELECT * from depart where deptid=$did";
	$result=mysql_query($str);
	while($row=mysql_fetch_assoc($result))
	{
		$json_array[]=$row;
	}
	echo json_encode($json_array);
}
mysql_close($con);
?>