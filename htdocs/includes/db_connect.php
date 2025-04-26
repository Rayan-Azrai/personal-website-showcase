<?php
// db_connect.php

$host = "sql312.infinityfree.com"; 
$dbName = "if0_38745512_cooking_website_db";
$user = "if0_38745512";   
$pass = "0dNXgPgFqKcuTXM";        

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Database connection failed: " . $e->getMessage();
  exit();
}
?>
