<?php
function isValid($str, $subj, $error_code) {
    if (str_replace(" ","", $str) == "") {
        $returnMsg = array(
            "error" => $error_code,
            "msg" => $subj." 입력해 주세요."
        );
        echo json_encode($returnMsg);
        exit();
    }
}

function checkToken() {

    session_start();
    $token = htmlspecialchars(sqlfilter($_REQUEST['token']));
    if ($_SESSION['token'] != $token) {
        $returnMsg = array(
            "result" => false,
            "error" =>  AUTH_TOKEN_FAIL,
            "msg" => "token 확인 해 주세요."
        );
        echo json_encode($returnMsg);
        exit();
    }

}



?>