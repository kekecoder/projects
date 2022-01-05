<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require_once __DIR__ . '/process/noteprocess.php';
}
?>
<?php require __DIR__ . '/templates/header.php'?>
      <h2 class="text-center mt-4"></h2>
      <div class="forms">
      <form class="form mt-4">
  <div class="form-group">
    <label for="note">Enter Your Note</label>
    <textarea name="note"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add Note</button>
      </form>
      </div>
    </div>
  </body>
</html>
