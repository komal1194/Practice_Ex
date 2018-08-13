<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("ecommerce");
//$status=array("status1" => "true", "status2" => "false");
$cmd = $_REQUEST['cmd'];

if( $cmd == 'add') {
	addOrder();
}

if( $cmd == 'update' ) {
	updateOrder();
}

if( $cmd == 'delete') {
    deleteOrder();
}

if( $cmd == 'get' ) {
	$by = $_REQUEST['by'];
	if( $by == 'all') {
		getAllOrder();
	}
	if( $by == 'oid') {
		getOrderById( $_REQUEST['oid'] );
	}	
}

function addOrder() {
$Name=$_GET['Name'];
$Mobile_No=$_GET['Mobile_No'];
$Address=$_GET['Address'];
$Product_Name=$_GET['Product_Name'];
$Product_Quantity=$_GET['Product_Quantity'];
$Order_Date=$_GET['Order_Date'];

	$str="insert into order_details values(Null,'$Name','$Mobile_No','$Address','$Product_Name',$Product_Quantity,'$Order_Date')";
	if(mysql_query($str)) 
   	{
		echo "true";
   	}
   	else
  	 {
		 echo "false".mysql_error();
   	}
}

function updateOrder() {
	//echo "update";
    $Name=$_GET['Name'];
    $Order_Id=$_GET['oid'];
 	$Mobile_No=$_GET['Mobile_No'];
	$Address=$_GET['Address'];
	$Product_Name=$_GET['Product_Name'];
	$Product_Quantity=$_GET['Product_Quantity'];
	$Order_Date=$_GET['Order_Date'];

     //echo $Name;
    $str="UPDATE order_details SET Name='$Name',Mobile_No='$Mobile_No',
    	Address='$Address',Product_Name='$Product_Name',Product_Quantity='$Product_Quantity',Order_Date='$Order_Date' WHERE Order_Id='$Order_Id'";


   if(mysql_query($str))
   {
       echo "True";
   }
   else
   {
	   echo "False".mysql_error();
   }
}

function deleteOrder() {
	$Order_Id=$_GET['oid'];
    $str="DELETE FROM order_details WHERE Order_Id=$Order_Id";
    if(mysql_query($str))
    {
	    echo "True";
    }
    else
    {
	echo "False";
    }
}

function getAllOrder() {
	$oid=$_GET['oid'];
	$str="SELECT * FROM order_details WHERE Order_Id=$oid";
	$result=mysql_query($str);
	while($row=mysql_fetch_assoc($result))
	{
		$json_array[]=$row;
	}
	echo json_encode($json_array);
}
mysql_close($con);
?>