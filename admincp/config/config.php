<?php
$mysqli = new mysqli("localhost","root","","web-mysqli");

if ($mysqli -> connect_errno) {
  echo "kết nối mysql lỗi: " . $mysqli -> connect_error;
  exit();
}
?>