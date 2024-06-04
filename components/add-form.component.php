  <form action="../tasks/insert.php" method="POST">
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
