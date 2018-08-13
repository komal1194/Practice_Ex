<?php
$color=array("K1"=>"Blue","K2"=>"Red","K3"=>"Yellow","K4"=>"Pink");
//Krsort($color);//sorting associative array by key rather than value
ksort($color);//
foreach($color as $key=>$value)
{

	echo "<br/>".$key."   ".$value;
}

?>