<?php 

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "database";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

if (!$conn) {
    die("Connection Failed");
}



?>







