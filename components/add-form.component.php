<?php
$sql ="SELECT id, name FROM categories";
$stmt= $conn->query($sql);
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="tasks/insert.php" method="POST">
    <div>
      <label for="">name</label>
      <input type="text" name="name" id="" required>
    </div>
    <div>
      <label for="">description</label>
      <input type="text" name="description" id="" required>
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
