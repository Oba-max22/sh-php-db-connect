<?php 
/* Connect php to database via msqli method*/ 
$serverName= "localhost";
$userName = "root";
$password = "" ;
$dbname = "test";

$con = mysqli_connect($serverName, $userName, $password, $dbname);

if(mysqli_connect_errno()){
    echo "Failed to connect!";
    exit();
} else {
    echo "Connection success!";
}

?>