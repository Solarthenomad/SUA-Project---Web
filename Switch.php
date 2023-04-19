<?php
$type = "form";
switch($type) {
    case "form" : print "등록 폼입니다."; // 확인 화면을 표시
    break;
    case "confirm": print "확인 화면입니다."; // 등록처리를 실행break;
    case "exec": print "등록처리를 실행중"; break;
    //오류 처리
    default: print "화면이 없습니다."; 
}
?>