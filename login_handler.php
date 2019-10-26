<?php
include_once 'signIn.html';
require_once 'Dao.php';
session_start();
$user = $_POST['Username'];
$pass = $_POST['Password'];
// $valid = $dao->isValidUser($username, $password);
$valid = false;
if (isset($_POST['Username'])) {
  $valid = true;
  $sql = "SELECT * FROM user WHERE	username="'.$user.'" AND password = "'.$pass.'" limit 1";
  
  $result = mysql_query($sql);
  
  if(mysql_num_rows($result)==1){
	  echo "Successful Login";
	  exit;
  } else {
	  echo "Unsuccessful login";
	  exit();	
  }
}
if ($valid) {
   header("Location: http://index.html");
   exit;
} else {
   header("Location: http://signin.html);
   exit;
}
?>

