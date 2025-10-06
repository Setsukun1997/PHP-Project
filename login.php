<?php
session_start();
require 'db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
if ($row = $result->fetch_assoc()) {
  if (password_verify($password, $row['password'])) {
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
    exit();
    echo " เข้าสู่ระบบสำเร็จ ";
  } else {
    echo " รหัสผ่านไม่ถูกต้อง ";
  }
} else {
  echo " ไม่พบผู้ใช้ ";
}
$conn->close();
?>