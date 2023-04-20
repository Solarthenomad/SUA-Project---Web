<?php 

$data = array("사과", "귤", "감");
list($fruit0, $fruit1, $fruit2) = $data;  //위의 코드와 같은 의미이다. 

$fruit0 = $data[0];
$fruit1 = $data[1];
$fruit2 = $data[2];

print_r($data);
print_r($fruit0);
print_r($fruit1);
print_r($fruit2);
?>