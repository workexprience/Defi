<?php

$dsn = "mysql:host=localhost;dbname=investment";
$dbusername = "root";
$dbpassword = "";

try {
  $pdo = new PDO($dsn,$dbusername,$dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
   echo "conection failed:". $e->getMessage();
}
 