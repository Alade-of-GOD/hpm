<?php
    $host = 'localhost';
    $username = 'PoG';
    $password = 'MyPhpAdmin';
    $database = 'hpm-hispraiseministries-hpm-db';
	  $dbcon = new mysqli($host, $username, $password, $database);
    if($dbcon->connect_errno > 0){
      die('Unable to connect to database [' . $dbcon->connect_error . ']');
	  }
  	else {
  		//echo "connection created successfully";
  	}

?>
