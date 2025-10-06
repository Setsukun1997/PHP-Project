<link rel="stylesheet" href="style.css">
<?php
require 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "INSERT INTO Suthat_tb (name, email) VALUES ('$name', '$email')";
$conn->query($sql);
echo " เพิ่มข้อมูลเรียบร้อยแล้ว";
$conn->close();
?>