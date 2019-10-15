<?php
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
}
?>