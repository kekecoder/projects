<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require_once __DIR__ . '/process/noteprocess.php';
}
?>
<?php require __DIR__ . '/templates/header.php'?>
      <h2 class="text-center mt-4"></h2>
      <div class="forms">
      <form method="POST" class="form mt-4">
      <?php if (isset($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php endforeach?>
      <?php endif?>
  <div class="form-group">
    <label for="note">Enter Your Note</label>
    <textarea name="note" class="form-control <?php echo isset($errors['note']) ? 'is-invalid' : ''; ?>"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add Note</button>
      </form>
      </div>
    </div>
  </body>
</html>
