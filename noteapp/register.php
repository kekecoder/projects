<?php require __DIR__ . '/templates/header.php'?>
<h2 class="text-center mt-4">Create Your account</h2>
        <div class="forms">
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
      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
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
    </div>
  </body>
</html>
