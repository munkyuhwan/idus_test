<?php
session_start();
session_destroy();


$returnMsg = array(
    "result" => true,
    "msg" => "로그아웃 되었습니다."
)

?>