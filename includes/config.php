<?php 
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "njangi";

try {

    $dbh = new PDO("mysql:host=$servername; dbname=$dbname",  $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
    
 catch (PDOException $e) {
  echo "Databaseconnection problem".$e->getMessage();  
}