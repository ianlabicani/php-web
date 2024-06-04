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