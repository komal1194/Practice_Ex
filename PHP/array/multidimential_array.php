<?php
$class=array(
	"student"=>array("s1","s2","s3"),
	"teacher"=>array("t1","t2","t3"),
	"subject"=>array("sub1","sub2","sub3")

	);
foreach($class as $key=>$value)
{
	echo "<br>".$key;
	foreach ($value as $data) {
		echo "<br>".$data;
	}
}
?>