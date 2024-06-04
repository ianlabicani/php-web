<?php require('../core/dbconn.php'); 
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = htmlspecialchars($_POST['name']);
  $description = htmlspecialchars($_POST['description']);
  $categoriesId = $_POST['categoriesId'];

  $sql = "INSERT INTO todos(name, description, status) VALUES ('$name','$description', Null)";
  if($conn->query($sql)){
    $_SESSION['success'] = "task inserted Successfully";
  }else{
    $_SESSION['error'] = " inserting task failed";
  }
  $todoId =$conn->lastInsertId();

  foreach($categoriesId as $categoryId){
    $sql ="INSERT INTO todo_categories(todo_id,category_id) VALUES('$todoId','$categoryId')";
    $conn->query($sql);

  }
  header('location:../index.php');  
}