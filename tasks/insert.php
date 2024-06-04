<?php require('../includes/dbconn.php'); 
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = htmlspecialchars($_POST['name']);
  $description = htmlspecialchars($_POST['description']);
  $categoriesId = $_POST['categoriesId'];

  $sql = "INSERT INTO tasks(name, description, status, created_at) VALUES ('$name','$description', 'finished', NOW())";
  if($conn->query($sql)){
    $_SESSION['success'] = "task inserted Successfully";
  }else{
    $_SESSION['error'] = " inserting task failed";
  }
  $taskId =$conn->lastInsertId();

  foreach($categoriesId as $categoryId){
    $sql ="INSERT INTO tasks_categories(tasks_id,categories_id) VALUES('$taskId','$categoryId')";
    $conn->query($sql);

  }
  header('location:../index.php');  
}


?>