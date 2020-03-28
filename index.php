<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$conn = mysqli_connect("localhost", "root", "123456", "cafe");

$sql = "  SELECT ";
$sql .= "   NOTICE_NUM, ";
$sql .= "   TITLE, ";
$sql .= "   REG_DT ";
$sql .= " FROM CAFE_NOTICE ";
$sql .= " ORDER BY REG_DT DESC; ";

$result = mysqli_query($conn, $sql);
?>

<html>
    <head>
        <title>간이 게시판</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div>
            <h1>게시판</h1>
            <table border="2" bgcolor="white">
                <!-- 테이블 상단 HEAD -->
                <div class="table_head">
                    <tr>
                        <th>번호</th>   
                        <th>제목</th>
                        <th>작성일</th>
                    </tr>
                </div>
                <!-- 테이블 데이터 -->
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row["NOTICE_NUM"] ?></td>
                    <td>
                        <a href="/view.php?noticeSeq=<?php echo $row["NOTICE_NUM"] ?>">
                        <?php echo $row["TITLE"] ?>
                        </a>
                    </td>
                    <td><?php echo $row["REG_DT"] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
            <br>
            <form action="registForm.php" method="GET">
                <button type="submit">글쓰기</button>
            </form>
        </div>
    </body>
</html>
