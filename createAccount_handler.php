<?php
	session_start();
	require 'Dao.php';
	
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$email = $_POST['Email'];
	$username=$_POST['userid'];
	$password=$_POST['passWord'];
	$reEnterpass=$_POST['re-enter-password'];
	$fail = false;	//to verify that no failures occured
	$_SESSION = array();
	
	//changes to if statements vs if else
	//checks to make sure forms have information
	if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($reEnterpass)){
		header("Location: createAccount.php?error=emptyfields&firstname=".$firstname."&lastName=".$lastname."&Email=".$email."&userid=".$username);
		$fail = true;
		$_SESSION['empty'] = "empty fields";	
    } 
	
	//validate first name
    if(preg_match("/^[0-9]*$/", $firstname)){
		header("Location: createAccount.php?error=invalidfirstname&lastName=".$lastname."&Email=".$email."&userid=".$username);
		$fail = true;
		$_SESSION['firstname'] = "invalid first name: must only contain letters";
	}
	
	//validate last name
	if(preg_match("/^[0-9]*$/", $lastname)){
		header("Location: createAccount.php?error=invalidlastname&firstname=".$firstname."&Email=".$email."&userid=".$username);
		$fail = true;
		$_SESSION['lastname'] = "invalid last name: must only contain letters";
	}	
	
	 //validate email
	 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		 header("Location: createAccount.php?error=invalidemail&firstname=".$firstname."&lastName=".$lastname."&userid=".$username);
		 $fail = true;
		 $_SESSION['email'] = "invalid email";
	 }
	
	 //validate username
	 if(preg_match("/[!@#$%&^*()-_+=|;<>?]$/", $username)){
		 header("Location: createAccount.php?error=invalidusername&firstname=".$firstname."&lastName=".$lastname."&Email=".$email);
		 $fail = true;
		 $_SESSION['username'] = "invalid: username cannot contain special characters";
	 }
	
	//validate password
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%&]{8,100}$/', $password)){
		header("Location: createAccount.php?error=invalidpassword&firstname=".$firstname."&lastName=".$lastname."&Email=".$email."&userid=".$username);
		$fail = true;
		$_SESSION['password'] = "invalid password: must contain 1 lower case, one upper case, one digit, one special character, and have a length of at least 8";
	}	
	
	//if two passwords are not equal
	if($password !== $reEnterpass){
		header("Location: createAccount.php?error=passwordcheck&firstname=".$firstname."&lastName=".$lastname."&Email=".$email."&userid=".$username);
		$fail = true;
		$_SESSION['passmatch'] = "passwords do not match";
	} 
	
	//if any failures occured
   if($fail == true){
		exit();
	}	
	
	//no failures occur from user entered data
	else {
		
		$sql="SELECT * FROM user WHERE username=?";
		$stmt=mysqli_stmt_init($conn);
		
		if(!mysqli_stmt_prepare($stmt, $sql)){
		  header("Location: createAccount.php?error=sqlerror&firstname=".$firstname."&lastName=".$lastname."&Email=".$email);
		  exit();
		} 
		else {
		  mysqli_stmt_bind_param($stmt, "s", $username);
		  mysqli_stmt_execute($stmt);
		  mysqli_stmt_store_result($stmt);
		  $resultCheck=mysqli_stmt_num_rows($stmt);
		  
		  if(resultCheck > 0){
		    header("Location: createAccount.php?error=usernamealreadyexists&firstname=".$firstname."&lastName=".$lastname."&Email=".$email);
		    exit();
		  } 
		  
		  //user logged in successfully
		  else {
			$sql="INSERT INTO user (username, password, firstname, lastname, email) VALUES (?, ?, ?, ?, ?)";
			$stmt=mysqli_stmt_init($conn);
			
			//if statement failes
			if(!mysqli_stmt_prepare($stmt, $sql)){
		      header("Location: createAccount.php?error=sqlerror&firstname=".$firstname."&lastName=".$lastname."&Email=".$email);
		      exit();
		    } 
			
			//if statement succeeds
			else {
			  mysqli_stmt_bind_param($stmt, "sssss", $username, $password, $firstname, $lastname, $email);
		      mysqli_stmt_execute($stmt);
			  header("Location: signIn.php?success=successfullyloggedin&firstname=".$firstname."&lastName=".$lastname."&Email=".$email);
		      exit();
			}
		  }
		}
		
		//closing database connections
		mysqli_stmt_close($stmt);
		mysqli_close($conn);	
	}	