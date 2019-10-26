<?php
if(isset($_POST['save-submit'])){
	
	require 'Dao.php';
	
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$email = $_POST['Email'];
	$username=$_POST['userid'];
	$password=$_POST['passWord'];
	$re-enterpass=$_POST['re-enter-password'];
	
	if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($re-enterpass)){
		header("Location: createAccount.html?error=emptyfields&firstName=".$firstname"&lastname=".$lastName"&Email=".$email"&userid=".$username"&passWord=".$password"&re-enter-password=".$re-enterpass")	
	}
	
}