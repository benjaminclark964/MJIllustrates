<?php
session_start();
if (!isset($_SESSION['logged_in']) || true !== $_SESSION['logged_in']) {
  header("Location: index.html");
  exit;
}
echo "ACCESS GRANTED  ";
?>
<a id="logout" href="logout_handler.php">Logout</a>