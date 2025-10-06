<?php
require 'db.php';
$sql = "SELECT * FROM Suthat_tb";
$result = $conn->query($sql);
echo "<h1> รายชื่อผู้ใช้ </h1>";
while ($row =$result->fetch_assoc()) {
  echo " ชื่อ: " . $row['name'] .  " | อีเมล์: " . $row['email'] . "<br>";
}
$conn->close();
?>