<?php
$result = array();
for ($i=0; $i<100; $i++) { 
    $number = rand(1,100);
    if (!in_array($number, $result)) {
        $result[] = $number;
    }
}
return $result;
?>