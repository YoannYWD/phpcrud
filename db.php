<?php 
/*
$servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "foot";
 $port = "3306";
 
 try{
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";
 } catch(PDOException $e){
    echo "Connection failed: " . $e -> getMessage();
 }
 */

$dsn = "mysql:host=localhost;dbname=foot";
$username = "root";
$password = "";
$options = [];
$connection = new PDO($dsn, $username, $password, $options);
try {
    print "Connexion réussie";
} catch(PDOException $e) {
    print "error : " . $e->getMessage();
    die();
}
