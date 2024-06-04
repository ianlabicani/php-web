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

  <form action="tasks/insert.php" method="POST">
    <div>
      <label for="">name</label>
      <input type="text" name="name" id="">
    </div>
    <div>
      <label for="">description</label>
      <input type="text" name="description" id="">
    </div>
    <div>
      <label for="">Categories</label>
      <select name="categoriesId[]" id="" multiple>
        <?php foreach($categories as $category){
        ?>
        <option value="<?=$category['id']?>"><?=$category['name']?></option>
        <?php }?>
      </select>
    </div>
    <div>
      <input type="submit" value="Enter">
    </div>
  </form>

</body>


<div class="card todos-card">
  <div class="card-title">
    <h1>Todo Web</h1>
  </div>
  <div class="card-body">
    <div class="todos-container">
      <?php foreach ($todos as $todo) { ?>
      <div class="todo">
        <div class="todo-data">
          <p class="todo-name">
            <?=$todo['name']?>
          </p>
          <p class="todo-description">
            <?=$todo['description']?>
          </p>
        </div>
        <div class="todo-actions">
        </div>
        <form action="index.php">
          <input type="hidden" name="id" value="<?=$todo['id']?>">
          <?php if ($todo['status'] === 'Incomplete') { ?>
          <button class="btn btn-primary" type="submit" name="finish">Finish</button>
          <?php } ?>
          <button class="btn btn-danger" type="submit" name="delete">Delete</button>
        </form>
      </div>
      <?php } ?>
    </div>
  </div>

</html>