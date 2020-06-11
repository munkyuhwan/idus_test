<html>
<head>
    <title>api사용법</title>
</head>
<body>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>
                        <h2>로그인</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>url</h3>
                    </td>
                    <td>
                        <h3>host/api/auth</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>method</h3>
                    </td>
                    <td>
                        <h3>POST</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>parmaeters</h3>
                    </td>
                    <td>
                        <h3>?id=닉네임&pw=비밀번호</h3>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="background-color: black; height: 2px;"></td>
                </tr>


                <tr>
                    <td>
                        <h2>로그아웃</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>url</h3>
                    </td>
                    <td>
                        <h3>host/api/auth</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>method</h3>
                    </td>
                    <td>
                        <h3>DELETE</h3>
                    </td>
                </tr>


                <tr>
                    <td colspan="2" style="background-color: black; height: 2px;"></td>
                </tr>

                <tr>
                    <td>
                        <h2>회원가입</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>url</h3>
                    </td>
                    <td>
                        <h3>host/api/member</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>method</h3>
                    </td>
                    <td>
                        <h3>PUT</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>parmaeters</h3>
                    </td>
                    <td>
                        <h3>?m_name=이름&m_nick=별명&m_pass=비밀번호&m_phone=연락처&m_email=성별</h3>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="background-color: black; height: 2px;"></td>
                </tr>

                <tr>
                    <td>
                        <h2>단일회원 정보</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>url</h3>
                    </td>
                    <td>
                        <h3>host/api/member</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>method</h3>
                    </td>
                    <td>
                        <h3>GET</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>parmaeters</h3>
                    </td>
                    <td>
                        <h3>?get=detail&idx=회원index</h3>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="background-color: black; height: 2px;"></td>
                </tr>

                <tr>
                    <td>
                        <h2>단일회원 주문목록 조회</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>url</h3>
                    </td>
                    <td>
                        <h3>host/api/member</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>method</h3>
                    </td>
                    <td>
                        <h3>GET</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>parmaeters</h3>
                    </td>
                    <td>
                        <h3>?get=order_list&idx=회원index</h3>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="background-color: black; height: 2px;"></td>
                </tr>

                <tr>
                    <td>
                        <h2>여러회원 조회</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>url</h3>
                    </td>
                    <td>
                        <h3>host/api/member</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>method</h3>
                    </td>
                    <td>
                        <h3>GET</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>parmaeters</h3>
                    </td>
                    <td>
                        <h3>?get=list&current_page=요청페이지&block=페이지별 항목 갯수&name=이름&email=이메일</h3>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>