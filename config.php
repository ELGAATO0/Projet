<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = 'school';

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
?>