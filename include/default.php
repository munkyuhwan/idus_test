<?php
include $_SERVER['DOCUMENT_ROOT']."/include/header.php";
include $_SERVER['DOCUMENT_ROOT']."/include/config.php";
//include $_SERVER['DOCUMENT_ROOT']."/include/paging.php";
include $_SERVER['DOCUMENT_ROOT']."/include/PDO/pdo.php";
include $_SERVER['DOCUMENT_ROOT']."/include/common_function.php";


$pdo = new MyPDO();
$reqMethod = $_SERVER['REQUEST_METHOD'];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode("/",$uri);

$uriDir = $uri[2];

?>