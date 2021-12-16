<?php 
  if($_SERVER['REQUEST_METHOD'] === "POST"){
    require_once('regprocess.php');
  }
?>
<form action="" method="post">
  <label>firstname</label>
  <input type="text" name="firstName">
  <small>
  <?php 
     echo $errors['firstName'] ?? '';
  ?>
  </small>
  <label>lastname</label>
  <input type="text" name="lastName">
  <small>
  <?php 
     echo $errors['lastName'] ?? '';
  ?>
  <label>email</label>
  <input type="email" name="email">
  <small>
  <?php 
    echo $errors['email'] ?? '';
  ?>
  <label>password</label>
  <input type="password" name="password">
  <small>
  <?php 
    echo $errors['password'] ?? '';
  ?>
  <label>Confirm Password</label>
  <input type="password" name="cpassword">
  <small>
  <?php 
    echo $errors['cpassword'] ?? '';
  ?>
  <input type="submit" value="Register">
</form>