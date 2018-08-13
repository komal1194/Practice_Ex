<?php
$letter = array("A"=>"35", "B"=>"37", "C"=>"43","D"=>"56","F"=>"67","H"=>"34");
asort($letter);
echo "asort array:<br>";
foreach($letter as $key => $value) 
{
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";

}
    echo "<br>";

arsort($letter);
echo "arsort array:<br>";
foreach($letter as $key => $value) 
{
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
    echo "<br>";

ksort($letter);
echo "ksort array:<br>";
foreach($letter as $key => $value) 
{
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
    echo "<br>";

krsort($letter);
echo "krsort array:<br>";
foreach($letter as $key => $value) 
{
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}


?>
