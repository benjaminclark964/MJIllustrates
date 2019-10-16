<?php
include_once 'createAccount.html';
include_once 'signIn.html';

class Dao {
  private $host = 'us-cdbr-iron-east-05.cleardb.net';
  private $dbname = 'heroku_c0ae98134ba57d2';
  private $username = 'becd588ff4db0c';
  private $password = '1acdca85';
  
  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    return $connection;
  }
  
  /*finish this after inserting into database*/
  public function getLogin(){
	  $conn = this->getConnection();
	  try{
		 
	  }catch(){
		  
	  }
  }
}

/*stores create account information in the database*/
public function putCreateAccount($user, $password, $re-enter-password, $firstname, $lastname, $email){
	$conn = this->getConnection();
	if($password != $re-enter-password){
		echo "Error: Passwords do not match";
		exit;
	}
	$saveQuery = "INSERT INTO user VALUES(:user, :password, :firstname, :lastname, :email)";
	$q = $conn->prepare($saveQuery);
	//figure this out more later
	$q->bindParam(":username", $user);
	$q->bindParam(":password", $password);
	$q->bindParam(":firstname", $firstname);
	$q->bindParam(":lastname", $lastname);
	$q->bindParam(":email", $email);
	$q->execute();
}

/*validEmail*/
public function validEmail($email){
	$conn = this->getConnection();
	$emailQuery = "SELECT email FROM user;"
}

/*valid username*/
public function validUsername($username){
	$conn = this->getConnection();
	$usernameQuery = "SELECT username FROM user";
}
