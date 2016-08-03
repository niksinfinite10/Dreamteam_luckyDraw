<?php
$fp = file('tickets.csv');
$index= rand ( 1 , count($fp) );
$arr= explode(",",$fp[$index]);
echo trim($arr[count($arr)-1]);


?>