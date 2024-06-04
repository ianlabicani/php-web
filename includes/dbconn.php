<?php
    $servername= 'localhost';
    $dbname = 'todo_db';
    $username ="root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "connected";
    } catch (PDOException $ex) {
      echo "error: ".$ex->getMessage();
    }
?>