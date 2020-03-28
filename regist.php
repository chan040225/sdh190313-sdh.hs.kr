<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  $title = $_POST["title"];
  $contents = $_POST["contents"];

  $conn = mysqli_connect("localhost", "root", "123456", "cafe");

  $sql = " INSERT INTO CAFE_NOTICE(TITLE, CONTENTS, REG_DT) ";
  $sql .= " VALUES ('$title', '$contents', NOW()) ";

  echo $sql;

  mysqli_query($conn, $sql);

  Header("Location:/index.php"); 
?>
