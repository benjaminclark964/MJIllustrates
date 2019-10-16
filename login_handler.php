<html
<?php
include_once 'signIn.html';
require_once 'Dao.php';
session_start();
$user = $_POST['Username'];
$pass = $_POST['Password'];
// $valid = $dao->isValidUser($username, $password);
$valid = false;
if ($user == validUser($user) && $pass == validPassword($pass)) {
  $valid = true;
}
if ($valid) {
   header("Location: http://index.html");
   exit;
} else {
   header("Location: http://signin.html);
   exit;
}
?>

