<?php 
require "./core/dbconn.php";
require "./tasks/fetch.php";
$todos = fetchTodos($conn);
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