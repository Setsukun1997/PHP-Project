<?php
require 'db.php';
$username = 'Suthat';
$password = password_hash('Suthat1652', PASSWORD_DEFAULT);
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo " ผู้ใช้นี้มีอยู่แล้ว";
} else {
  $sql = "INSERT INTO users (username, passowrd) VALUES ('$username', '$password')";
  $conn->query($sql);
  echo " เพิ่มผู้ใช้เรียบร้อยแล้ว";
}
$conn->close();
?>