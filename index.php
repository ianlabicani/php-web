<?php
// change source of data from static array to database
$todos = array(
  array(
    'name' => 'Todo 1',
    'description' => 'Description 1'
  ),
  array(
    'name' => 'Todo 2',
    'description' => 'Description 2'
  ),
  array(
    'name' => 'Todo 3',
    'description' => 'Description 3'
  )
);

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
  
<div class="card todos-card">
  <div class="card-title">
    <h1>Todo Web</h1>
  </div>
  <div class="card-body">
    <div class="todos-container">

    <?php foreach ($todos as $todo) { ?>
      <div class="todo">
        <p class="todo-name">
          <?=$todo['name']?>
        </p>
        <p class="todo-description">
          <?=$todo['description']?>
        </p>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
</body>
</html>