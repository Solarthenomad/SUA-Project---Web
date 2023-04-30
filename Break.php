<?php 

$member[0] = "김이화";
$member[1] = "박이화";
$member[2] = "최이화";
$member[3] = "이이화";
$member[4] = "신이화"; 
$i =1;
$limit =3;
foreach($member as $key => $value) {
    if($i > $limit) {
        print"반복을 빠져나옵니다.<br>";
        break;
    }
    print "이름 : $value"; print "<br>"; $i++;
}

?>