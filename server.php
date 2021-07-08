<?php
  session_start();

  $username = "";
  $email = "";
  $errors = array();

  $conn = new mysqli('localhost', 'root', '', 'tinyapp');

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->$connect_error);
  }
  
  if(isset($_POST['reg_user'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password_1 = $conn->real_escape_string($_POST['password1']);
    $password_2 = $conn->real_escape_string($_POST['password2']);

    if(empty($email))  { array_push($errors, 'Email is required'); } 
    if(empty($password_1)) { array_push($errors, 'Password is required'); }
    if($password_1 != $password_2) { array_push($errors, "Passwords don't match"); }

    $email_check_query = "SELECT * FROM users WHERE name = '$email';";

    $result = $conn->query($email_check_query);

    if ($result->num_rows > 0) { 
      array_push($errors, "A user with that e-mail already exists");
    }

    if (count($errors) == 0) {
      $password = md5($password_1); // Encrypt password
      $query = "INSERT INTO users (name, password) VALUES ('$email', '$password');";
      if ($conn->query($query) === TRUE) {
        echo "User successfully added!";
      } else {
        echo "Error ". $query . "<br>" . $conn->error;
      }
      $_SESSION['username'] = $email;
      $_SESSION['success'] = "You are now logged in";
      //header("location: index.php");
      $conn->close();
    }
  }
?>