<?php
session_start();
$username = $_POST['login'];
$password = $_POST['password'];
// $valid = $dao->isValidUser($username, $password);
$valid = false;
if ($username == /*database*/ && $password == "database") {
  $valid = true;
}
$_SESSION = array();
if ($valid) {
   $_SESSION['logged_in'] = true;
   header("Location: http://cs401/granted.php");
   exit;
} else {
   $_SESSION['message'] = "Invalid username or password";
   header("Location: http://cs401/login.php");
   exit;
}
?>