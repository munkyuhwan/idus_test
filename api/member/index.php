<?php
include $_SERVER['DOCUMENT_ROOT']."/include/default.php";

if ($uriDir != "member") {
    header("HTTP/1.1 404 Not Found"); //그렇지 않은 경우 404 에러를 헤더에 삽입
    exit(); //함수 종료
}

switch($reqMethod) {

    case "POST":
        break;

    case "GET":
        checkToken();
        $getType = htmlspecialchars(sqlfilter($_REQUEST['get']));
        switch($getType) {
            case "list":
                require_once "get_action.php";
                break;
            case "order_list":
                require_once "order_list.php";
                break;
            case "detail":
                require_once "detail.php";
                break;
            default:
                header("HTTP/1.1 404 Not Found"); //그렇지 않은 경우 404 에러를 헤더에 삽입
                exit(); //함수 종료
                break;

        }

        break;

    case "REQUEST" :

        break;

    case "DELETE":

        break;

    case "PUT":
        require_once "join_action.php";
        break;

    case "OPTIONS":

        break;
    default:

        break;


}




?>