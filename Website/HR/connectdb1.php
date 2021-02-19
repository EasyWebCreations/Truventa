<?php
$servername = "localhost:3307";
$username = "root";
$password = "admin123";
$dbname = "truventa";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($connect->connect_error) 
{
  echo "Connection failed: ";
}
else
echo "Connected successfully";
?>