<!Doctype HTML>
<html lang="en">
  <head>
    <meta charset="utf8">
    <title>NoteApp | Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/noteapp.css">
  </head>
  <body>
    <div class="container-fluid">
      <h2 class="text-center mt-4">Create Your account</h2>
      <form class="form mt-4">
        <div class="form-group">
    <label for="Firstname">Firstname</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Lastname">Lastname</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <small class="form-text text-muted">We'll never share your email with anyone else.</smal>
  </div>
 <div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <p class="mt-3">Already have an account? <a href="login.php">Login Here</a></p> 
    </div>
  </body>
</html>