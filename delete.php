<?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  $noticeSeq = $_POST["noticeSeq"];

  $conn = mysqli_connect("localhost", "root", "123456", "cafe");

  $sql = "  DELETE FROM CAFE_NOTICE ";
  $sql .= " WHERE NOTICE_NUM = $noticeSeq ";

  echo $sql;

  mysqli_query($conn, $sql);

  Header("Location:/index.php"); 
?>
