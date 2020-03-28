<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$noticeSeq = $_POST["noticeSeq"];
$title = $_POST["title"];
$contents = $_POST["contents"];

$conn = mysqli_connect("localhost", "root", "123456", "cafe");

$sql = "  UPDATE CAFE_NOTICE ";
$sql .= "   SET TITLE = '$title', ";
$sql .= "   CONTENTS = '$contents' ";
$sql .= " WHERE NOTICE_NUM = $noticeSeq ";

mysqli_query($conn, $sql);

Header("Location:/index.php");
?>
