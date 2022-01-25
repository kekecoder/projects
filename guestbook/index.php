<?php 
 if($_SERVER['REQUEST_METHOD'] === "POST"){
   require_once __DIR__ . '/core/process.php';
 }
?>
<!Doctype HTML>
<html lang="en">
  <head>
    <meta charset="utf8">
    <title>Guestbook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container container-sm">
      <h1 class="text-center mb-3 mt-3">Welcome on Board</h1>
      <p>Please fill the form below.</p>
      <form action="" method="post">
        <div class="row">
          <div class="col">
            <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" name="firstname" class="form-control <?php echo isset($error['firstname']) ? 'is-invalid' : ''?>">
          <small class="invalid-feedback">
            <?php echo $error['firstname'] ?? ''?>
          </small>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control <?php echo isset($error['lastname']) ? 'is-invalid' : ''?>" name="lastname">
          <small class="invalid-feedback">
            <?php echo $error['lastname'] ?? ''?>
          </small>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control <?php echo isset($error['email']) ? 'is-invalid' : ''?>" name="email">
          <small class="invalid-feedback">
            <?php echo $error['email'] ?? ''?>
          </small>
        </div>
        <div class="form-group">
          <label for="comment">Comment</label>
          <textarea name="comment" class="form-control <?php echo isset($error['comment']) ? 'is-invalid' : ''?>"></textarea>
          <small class="invalid-feedback">
            <?php echo $error['comment'] ?? ''?>
          </small>
        </div>
        <button class="btn btn-success">Add Comment</button>
      </form>
    </div>
  </body>
</html>