<?php
//if(isset($_POST['save-submit'])){
	
	require 'Dao.php';
	
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$email = $_POST['Email'];
	$username=$_POST['userid'];
	$password=$_POST['passWord'];
	$reEnterpass=$_POST['re-enter-password'];
	
	//checks to make sure forms have information
	if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($reEnterpass)){
		header("Location: createAccount.php?error=emptyfields&firstName=".$firstname."&lastName=".$lastname."&Email=".$email."&userid=".$username);
        exit();	
    } 
	
	//validate first name
	else if(!preg_match("/^[a-z]*$/", $firstname)){
		header("Location: createAccount.php?error=invalidfirstname&lastName=".$lastname."&Email=".$email."&userid=".$username);
		exit();
	}
	
	//validate last name
	else if(!preg_match("/^[a-z]*$/", $lastname)){
		header("Location: createAccount.php?error=invalidlastname&firstName=".$firstname."&Email=".$email."&userid=".$username);
		exit();
	}	
	
	//validate email
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: createAccount.php?error=invalidemail&firstname=".$firstname."&lastName=".$lastname."&userid=".$username);
	}
	
	//validate username
	else if(!preg_match("/^[a-z]*$/", $username)){
		header("Location: createAccount.php?error=invalidusername&firstName=".$firstname."&lastName=".$lastname."&Email=".$email);
		exit();
	}	
	
	//validate password
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $password)){
		header("Location: createAccount.php?error=invalidpassword&firstname=".$firstname."&lastName=".$lastname."&Email=".$email."&userid=".$username);
        exit();
	}	
	
	//if two passwords are not equal
	else if($password !== $reEnterpass){
		header("Location: createAccount.php?error=passwordcheck&firstName=".$firstname."&lastName=".$lastname."&Email=".$email."&userid=".$username);
		exit();
		
	//if user enters a user name already in the database
	} else {
		
		$sql="SELECT * FROM user WHERE username=?";
		$stmt=mysqli_stmt_init($conn);
		
		if(!mysqli_stmt_prepare($stmt, $sql)){
		  header("Location: createAccount.php?error=sqlerror&firstName=".$firstname."&lastName=".$lastname."&Email=".$email);
		  exit();
		} 
		else {
		  mysqli_stmt_bind_param($stmt, "s", $username);
		  mysqli_stmt_execute($stmt);
		  mysqli_stmt_store_result($stmt);
		  $resultCheck=mysqli_stmt_num_rows($stmt);
		  
		  if(resultCheck > 0){
		    header("Location: createAccount.php?error=usernamealreadyexists&firstName=".$firstname."&lastName=".$lastname."&Email=".$email);
		    exit();
		  } 
		  
		  //user logged in successfully
		  else {
			$sql="INSERT INTO user (username, password, firstname, lastname, email) VALUES (?, ?, ?, ?, ?)";
			$stmt=mysqli_stmt_init($conn);
			
			//if statement failes
			if(!mysqli_stmt_prepare($stmt, $sql)){
		      header("Location: createAccount.php?error=sqlerror&firstName=".$firstname."&lastName=".$lastname."&Email=".$email);
		      exit();
		    } 
			
			//if statement succeeds
			else {
			  mysqli_stmt_bind_param($stmt, "sssss", $username, $password, $firstname, $lastname, $email);
		      mysqli_stmt_execute($stmt);
			  header("Location: index.php?success=successfullyloggedin&firstName=".$firstname."&lastName=".$lastname."&Email=".$email);
		      exit();
			}
		  }
		}
		
		//closing database connections
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		
	}
	
//}