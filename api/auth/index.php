<?php
include $_SERVER['DOCUMENT_ROOT'] . "/include/default.php";

if ($uriDir != "auth") {
    header("HTTP/1.1 404 Not Found"); //그렇지 않은 경우 404 에러를 헤더에 삽입
    exit(); //함수 종료
}

switch($reqMethod) {

    case "POST":
        require_once "login_action.php";
        break;

    case "GET":

        break;

    case "REQUEST" :

        break;

    case "DELETE":
        require_once "logout_action.php";
        break;

    case "PUT":
        break;

    case "OPTIONS":

        break;
    default:

        break;


}


?>