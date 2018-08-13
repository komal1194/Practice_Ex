<?php
$str="Hello World";
echo "String Length is:".strlen($str);
echo "<br>";
echo "Reserve String is:".strrev($str);
echo "<br>";

echo "Position of world is:".strpos($str, "World");
echo "<br>";

echo "Word count in string is:".str_word_count($str);
echo "<br>";

echo "Replace string is:".str_replace("World", "Bitcode", $str);
echo "<br>";

$str_explode=explode(" ", $str);
print_r($str_explode);

echo "<br>";
$str_implode=implode(" ", $str_explode);
print_r($str_implode);

echo "<br>";
$str_split=split(" ", $str);
print_r($str_split);

echo "<br>";
?>