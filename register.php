<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <title>Register</title>
</head>
<body class = "text-center">
  <header>
    <h1>Register</h1>
  </header>
  <main class = "form-signin">
    <form method = "POST" action="register.php">
      <?php include('errors.php'); ?>
      <div class = "form-floating">
        <label for = "email" >Email: </label>
        <input class = "form-control" type = "text" id = "email" name="email" placeholder="Email" value="<?php echo $email; ?>">
      </div>
      <div class = "form-floating">
        <label class = "form-label" for = "password">Password: </label>
        <input class = "form-control" type = "password" id = "password" name="password1">
      </div>
      <div class = "form-floating">
        <label class = "form-label" for = "confirm_password">Confirm Password: </label>
        <input class = "form-control" type = "password" id = "confirm_password" name="password2">
      </div>
      <div class = "form-floating">
        <br />
        <input type = "submit" class = "btn-primary btn-lg" name = "reg_user">
      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>