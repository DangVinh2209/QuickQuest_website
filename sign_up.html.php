<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="new_style.css">
    <title>Document</title>
</head>
<body class="bg-light">

  <div class="container">
    <div class="register-container">
      <h1 class="register-title">Register</h1>
      <form action="sign_up.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input class="form-control" type="text" name="name" id="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input class="form-control" type="email" name="email" id="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input class="form-control" type="password" name="password" id="password" required>
        </div>
        <div class="mb-3">
          <label for="confirm_password" class="form-label">Confirm Password</label>
          <input class="form-control" type="password" name="confirm_password" id="confirm_password" required>
        </div>
        <input type="checkbox" name="agree" required>
        <label for="agree">I agree to the Terms & Conditions and Privacy Policy</label>
        <a href='termsandpolicy.html'>Terms & Conditions and Privacy Policy</a>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
        </div>
        
        <?php if (isset($output)) echo "<div class='mt-3 text-primary text-center'>$output</div>"; ?>
      </form>

      <form action="login.html" class="mt-3">
        <div class="d-grid">
          <button type="submit" class="btn btn-outline-secondary">Log In</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>