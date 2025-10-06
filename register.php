<?
require 'db.php';
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo " ชื่อผู้ใช้นี้มีอยู่แล้ว ";
} else {
  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  $conn->query($sql);
  echo " สมัครสมาชิกสำเร็จ ";
} 
$conn->close();
?>