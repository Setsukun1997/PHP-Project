<?php
$host = "127.0.0.1";
$user = "Suthat";
$pass = "Suthat1652";
$dbname = "Suthat_db";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("เชื่อมต่อไม่สำเร็จ: " . $conn->connect_error);
}
?>