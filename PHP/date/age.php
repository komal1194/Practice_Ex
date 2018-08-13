<?php
    $dob='2000-01-01';
    $diff = (date('Y') - date('Y',strtotime($dob)));
    echo $diff;
?>
