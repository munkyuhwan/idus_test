<?php
define("DB_ID","root");
define("DB_PW","root");
define("DB_NAME","idus");

define("ERROR_CODE_1","0001");
define("ERROR_CODE_2","0002");
define("ERROR_CODE_3","0003");
define("ERROR_CODE_4","0004");
define("ERROR_CODE_5","0005");
define("ERROR_CODE_6","0006");
define("ERROR_CODE_7","0007");
define("EMAIL_INVALID","0008");
define("NAME_INVALID","0009");
define("MEMBERID_INVALID","0010");
define("USERID_INVALID","0011");
define("USERPW_INVALID","0012");
define("AUTH_FAIL","0013");
define("AUTH_TOKEN_FAIL","0014");


function sqlfilter($str) {
    //1�ܰ� ? ',",NULL ���� ���͸�. �� ���ڵ鿡 �齽����(\) ���Ե�. �ʼ� �׸�
    //��½� stripslashes()�Լ��� �̿��Ͽ� �齽����(\)�� ����
    $str = urldecode($str);
    if (!get_magic_quotes_gpc()) $str = addslashes($str);
    //3�ܰ� ? Ư�� ���� �� ���ڿ� ���͸�
    //WHERE �������� �������� �����͸� ����ϴ� ���� �ٶ����ϴ�.
    $search = array("--","#",";","+");
    $replace = array("\--","\#","\;","\+");
    $str = str_replace($search, $replace, $str);
    return $str;
}


?>