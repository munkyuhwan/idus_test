<?php

$mName = htmlspecialchars(sqlfilter($_REQUEST['m_name']));
$mNick = htmlspecialchars(sqlfilter($_REQUEST['m_nick']));
$mPass = htmlspecialchars(sqlfilter($_REQUEST['m_pass']));
$mPhone = htmlspecialchars(sqlfilter($_REQUEST['m_phone']));
$mEmail = htmlspecialchars(sqlfilter($_REQUEST['m_email']));
$mGender = htmlspecialchars(sqlfilter($_REQUEST['m_gender']));

$returnMsg = array();

isValid($mName, "이름을", ERROR_CODE_1);
isValid($mNick, "별명을", ERROR_CODE_2);
isValid($mPass, "비밀번호를", ERROR_CODE_3);
if (strlen($mPass) < 10) {
    $returnMsg = array(
        "result" => false,
        "error" =>  ERROR_CODE_6,
        "msg" => "비밀번호를 10자이상 입력해 주세요."
    );
    echo json_encode($returnMsg);
    exit();

}
isValid($mPhone, "연락를", ERROR_CODE_4);
isValid($mEmail, "이메일을", ERROR_CODE_5);


$mPass = sha1( sha1($mPass)."test" );

$query = "INSERT INTO `tbl_member`( `m_name`, `m_nick`, `m_pass`, `m_phone`, `m_email`, `m_gender`) VALUES  (?,?,?,?,?,?)";
$param = array($mName, $mNick, $mPass, $mPhone, $mEmail, $mGender);

$result = $pdo -> insert_query($query, $param);

$returnMsg = array(
    "result" => true,
    "data" => $result
);

echo json_encode($returnMsg);
?>