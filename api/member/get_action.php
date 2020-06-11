<?php

$current_page = htmlspecialchars(sqlfilter($_REQUEST['current_page']))-1;
$block = 5;
$next_page = $current_page+1;

$name = htmlspecialchars(sqlfilter($_REQUEST['m_name']));
$email = htmlspecialchars(sqlfilter($_REQUEST['m_email']));


isValid(htmlspecialchars(sqlfilter($_REQUEST['current_page'])), "페이지",  ERROR_CODE_7);
isValid($name, "이름",  NAME_INVALID);
isValid($email, "이메일",  EMAIL_INVALID);

$query = "SELECT * FROM tbl_member WHERE m_name LIKE '%".$name."%' OR m_email LIKE '%".$email."%' LIMIT ".$current_page*$block." , ".$block;
$result = $pdo -> select_all($query);


$returnMsg = array(
    "result" => true,
    "data" => $result
);
if (count($result) >= $block ) {
    $returnMsg['next_page'] = $next_page;
}


echo json_encode($returnMsg);

?>