<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $noticeSeq = $_GET["noticeSeq"];

    $conn = mysqli_connect("localhost", "root", "123456", "cafe");

    $sql = "  SELECT ";
    $sql .= "   NOTICE_NUM, ";
    $sql .= "   TITLE, ";
    $sql .= "   CONTENTS, ";
    $sql .= "   REG_DT ";
    $sql .= " FROM CAFE_NOTICE ";
    $sql .= " WHERE NOTICE_NUM = $noticeSeq ";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>VIEW</title>
    </head>
    <body>
        <div style="width: 400px">
            <h1>게시판</h1>
            <table border="2" bgcolor="white" style="width: 100%">
                <tr>
                    <th>번호</th>
                    <td><?php echo $row["NOTICE_NUM"] ?></td>
                </tr>
                <tr>
                    <th>제목</th>
                    <td><?php echo $row["TITLE"] ?></td>
                </tr>
                <tr>
                    <th>작성일</th>
                    <td><?php echo $row["REG_DT"] ?></td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td><?php echo $row["CONTENTS"] ?></td>
                </tr>
            </table>
            <br>
            <div style="text-align: center;">
                <form action="/modifyForm.php" method="GET" style="display: inline;">
                    <input type="hidden" name="noticeSeq" value="<?php echo $noticeSeq ?>">
                    <button type="submit">수정</button>
                </form>
                <form action="/delete.php" method="POST" style="display: inline;">
                    <input type="hidden" name="noticeSeq" value="<?php echo $noticeSeq ?>">
                    <button type="submit">삭제</button>
                </form>
            </div>
        </div>
    </body>
</html>
