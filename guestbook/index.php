<!Doctype HTML>
<html lang="en">
  <head>
    <meta charset="utf8">
    <title>Guestbook</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Welcome on Board</h1>
      <p>Please fill the form below.</p>
      <form action="" method="post">
        <div class="row">
          <div class="col">
            <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" name="firstname" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control" name="lastname">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="comment">Comment</label>
          <textarea name="comment" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Add Comment</button>
      </form>
    </div>
  </body>
</html>