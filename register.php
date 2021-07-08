<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Register</title>
</head>
<body>
  <header>
    <h1>Register</h1>
  </header>

  <form method = "POST" action="register.php">
    <?php include('errors.php'); ?>
    <div class = "mb-3 row">
      <label class = "form-label" for = "username">Username</label>
      <input type="text" name = "username" class = "form-control" value="<?php echo $username; ?>">
    </div>
    <label for = "email">Email: </label>
    <input type = "text" name = "email" value="<?php echo $email; ?>">
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>