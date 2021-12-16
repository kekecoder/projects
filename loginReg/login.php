<?php 
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once("loginprocess.php");
  }
?>
<form method="post">
  <label>Email</label>
  <input type="email" name="email">
  <small>
    <?php echo $errors['email'] ?? "";?>
  </small>
  <label>Password</label>
  <input type="password" name="password">
  <small>
    <?php 
      echo $errors['password'] ?? "";
    ?>
  </small>
  <input type="submit" value="Login">
</form>