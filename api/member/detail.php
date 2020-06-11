<?php
$idx = htmlspecialchars(sqlfilter($_REQUEST['idx']));

isValid($idx, "회원id",  MEMBERID_INVALID);

$query = "SELECT * FROM tbl_member WHERE idx=?";
$param = array($idx);
$result = $pdo -> select_all($query, $param);


$returnMsg = array(
    "result" => true,
    "data" => $result

);



echo json_encode($returnMsg);


?>