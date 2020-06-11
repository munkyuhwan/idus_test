<?php
$id = htmlspecialchars(sqlfilter($_REQUEST['id']));
$pw = htmlspecialchars(sqlfilter($_REQUEST['pw']));

isValid($id, "아이디", USERID_INVALID);
isValid($pw, "비밀번", USERPW_INVALID);

$query = "SELECT idx FROM tbl_member WHERE m_nick=? AND m_pass = ?";
$param = array($id, sha1(sha1($pw)."test") );
$result = $pdo -> select_query($query,$param);

if (!$result) {
    $returnMsg = array(
        "result" => false,
        "error" =>  AUTH_FAIL,
        "msg" => "아이디/비밀번호를 확인 해 주세요."
    );

}else {

    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['token'])) {
        $token = md5(uniqid(Rand(), TRUE));
        $_SESSION['token'] = $token;
        $result['token'] = $token;
    }

    $returnMsg = array(
        "result" => true,
        "data" => $result
    );
}

echo json_encode($returnMsg);

?>