<?php
  session_start();

  $username = "";
  $email = "";
  $errors = array();


  $db = mysqli_connect('localhost', 'root', '', 'tinyapp');

  if(isset($_POST['reg_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password2']);

    if(empty($email))  { array_push($errors, 'Email is required'); } 
    if(empty($password_1)) { array_push($errors, 'Password is required'); }
    if($password_1 != $password_2) { array_push($errors, "Passwords don't match"); }

    $email_check_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";

    $result = mysqli_query($db, $email_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { 
      array_push($errors, "A user with that e-mail already exists");
    }

    if (count($errors) == 0) {
      $password = md5($password_1); // Encrypt password
      $query = "INSERT INTO users (email, password) VALUES ('$email', '$password');";
      $mysqli_query($db, $query);
      $_SESSION['username'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header("location: index.php");
    }
  }
?>