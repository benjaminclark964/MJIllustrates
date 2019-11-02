<?php
	//database credentials
   $host = 'us-cdbr-iron-east-05.cleardb.net';
   $dbname = 'heroku_c0ae98134ba57d2';
   $username = 'becd588ff4db0c';
   $password = '1acdca85';
  
   $conn = mysqli_connect($host, $username, $password, $dbname);
  
   if(!$conn){
	   die("Connection Failed: " .mysqli_connect_error());
   }