<?php
session_start();
	
  $user = $_POST['username'];
  $pass = $_POST['password'];
  require_once 'Dao.php';
  
  //checks if either field empty
  if(empty($user) || empty($pass)){
	  header("Location: signIn.php?error=emptyfields");
	  exit();
  }

  //user inputs data into both text boxes  
  else {
    $sql="SELECT * FROM user WHERE username=? OR email=?;";
	$stmt=mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt, $sql)){
	  header("Location: signIn.php?error=sqlerror");
	  exit();	
  } 
  //stmt worked correctly
  else{
	  mysqli_stmt_bind_param($stmt, "ss", $user, $user);
	  mysqli_stmt_execute($stmt);
	  $result = mysqli_stmt_get_result($stmt);
	  if($row = mysqli_fetch_assoc($result)){
	    $passCheck=password_verify($pass, $row['password']);
		//if password is false
		if($pass != $row['password']){
		  header("Location: signIn.php?error=invalidpassword");
	      exit();
		}
		else if($pass == $row['password']){
		  	$_SESSION['userId'] = $row['userID'];
			$_SESSION['user'] = $row['username'];
			header("Location: index.php?success=signedin");
	        exit();
		}
		
	   else{
		header("Location: signIn.php?error=nouser");
	    exit();
	  }
    }
   } 
  } 
 


