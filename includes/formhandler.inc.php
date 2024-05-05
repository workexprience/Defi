<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
     $email = $_POST["email"];
      $pwd = $_POST["pwd"];


    try {
        require_once "dbh.inc.php";
        
        $query = "INSERT INTO register (username,email,pwd) VALUES
        (:username,:email,:pwd);";


         $stmt = $pdo->prepare($query);
         
          $stmt->bindparam(":username",$username);
          $stmt->bindparam(":email",$email);
          $stmt->bindparam(":pwd",$pwd);
          
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}  else{
    header("location: ../index.php");
}