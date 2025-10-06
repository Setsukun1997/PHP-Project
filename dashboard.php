<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.html");
  exit();
}
?> 
<h1> ยินดีต้อนรับคุณ <?php echo $_SESSION['user']; ?>!</h1>
<a href="logout.php"> ออกจากระบบ </a>