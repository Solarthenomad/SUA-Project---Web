<?php
$username = "user";
$password = "pass";
$db_data["username"] = "user";
$db_data["password"] = "pass";
if($db_data["username"]==$username && $db_data["password"] == $password)
{
    print "회원 페이지입니다.";
} else {
    print "로그인에 실패하였습니다.";
}
?>