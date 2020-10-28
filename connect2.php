<?php 

$serverName= "localhost";
$userName = "root";
$password = "" ;
$dbName = "test";

try{
    $con = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Success";
} catch (PDOException $e) {
    ECHO "Error in connection " . $e ->getMessage();
}

?>