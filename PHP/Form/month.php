<html>
<body>
<form method=post action="month.php">
<select name="month">
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>Sept</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
<input type="submit" value="submit">
</form></body></html>


<?php
$month=$_POST['month'];
 switch($month)
 {
 	case 'Jan':
 	echo "Days in January:-"."31";
 	break;
 	case 'Feb';
 	echo "Days in Feb:-"."28";
 	break;
 	case 'March':
 	echo "Days in Mar:"."31";
 	break;
 	case 'April';
 	echo "Days in April"."30";
 	break;
 	case 'May';
 	echo "Days in May:-"."31";
 	break;

 	case 'June';
 	echo "30";
 	break;
 	
 	case 'July';
 	echo "31";
	break;

	case 'Aug';
	echo "30";
	break;

	case 'Sept':
	echo "31";
	break;

	case 'Oct':
	echo "30";
	break;
	case 'Nov':
	echo "31";
		break;
		case 'Dec':
			echo "31";
			break;

 }

?>
