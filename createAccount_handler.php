<?php
include_once 'createAccount.html';
session_start();

$username = $_POST['username];
$password = $_POST['password'];
$firstname = $_POST['firstname']
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$re-enter-password = $_POST['re-enter-password'];

$validUser = $dao->validUser($username);
$validEmail = $dao->validEmail($email);

/*checks for invalid username*/
if ($username == validUser()){
	echo "Error: username already exists";
	exit;
}
/*checks for invalid email*/
if ($email == validEmail($email)){
	echo "Error: email is associated with an existing account";
	exit;
}
?>