<?php require('includes/dbconn.php'); 
session_start();?>

<?php
// change source of data from static array to database
$todos = array(
  array(
    'id' => 1,
    'name' => 'Todo 1',
    'description' => 'Description 1',
    'status' => 'Incomplete'
  ),
  array(
    'id' => 2,
    'name' => 'Todo 2',
    'description' => 'Description 2',
    'status' => 'Complete'
  ),
  array(
    'id' => 3,
    'name' => 'Todo 3',
    'description' => 'Description 3',
    'status' => 'Incomplete'
  )
);

?>

<?php 
    $sql ="SELECT id, name FROM categories";
    $stmt= $conn->query($sql);
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Todo Web</title>
</head>

<body>
  <?php if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
  }
  ?>

<!-- render add form component -->
  <?php require "./components/add-form.component.php"?>
  
<div class="card todos-card">
  <div class="card-title">
    <h1>Todo Web</h1>
  </div>
  <div class="card-body">
    <div class="todos-container">
      <?php foreach ($todos as $todo) { ?>
        <!-- render todo component -->
        <?php require "./components/todo.component.php"?>
      <?php } ?>
    </div>
  </div>
</body>

</html>