<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db="data";

// Create connection
$db = new mysqli($servername, $username, $password,$db) or die ("unable to connect");

echo "Connected successfully ramzan";
?>