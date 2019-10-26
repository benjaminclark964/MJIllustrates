<?php
if(isset($_POST['save-submit'])){
	
	require 'Dao.php';
	
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$email = $_POST['Email'];
	$username=$_POST['userid'];
	$password=$_POST['passWord'];
	$reEnterpass=$_POST['re-enter-password'];
	
	echo "I made it";
	
	if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($reEnterpass)){
		header("Location: http://createAccount.html");
        exit();		
	}
}