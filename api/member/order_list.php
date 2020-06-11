<?php

$current_page = htmlspecialchars(sqlfilter($_REQUEST['current_page']))-1;
$block = 5;
$next_page = htmlspecialchars(sqlfilter($_REQUEST['current_page']))+1;
$idx = htmlspecialchars(sqlfilter($_REQUEST['idx']));
isValid(htmlspecialchars(sqlfilter($_REQUEST['current_page'])), "페이지",  ERROR_CODE_7);
isValid($idx, "회원아이디", MEMBERID_INVALID);

$query = "SELECT * FROM tbl_order WHERE m_idx=? LIMIT ".$current_page*$block." , ".$block;
$param = array($idx);

$result = $pdo -> select_all($query, $param);

$returnMsg = array(
    "result" => true,
    "data" => $result
);
if (count($result) >= $block ) {
    $returnMsg['next_page'] = $next_page;
}

echo json_encode($returnMsg);

?>