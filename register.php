<?php
  require_once "config.php";

  // Define Variables and initialize with empty values"
  $username = $password = $confirm_password = "";
  $username_err = $password_err = $confirm_password_err = "";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if(empty(trim($_POST['username']))) {
      $username_err = "Please enter a username";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
      $username_err = "Username can only contain letters, numbers and underscores";
    } else {
      $sql = "SELECT id FROM users WHERE username = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        if ( mysqli_stmt_exectute($stmt)) {
          mysqli_stmt_store_result($stmt);

          if(mysqli_stmt_num_rows($stmt) == 1) {
            $username_err = "This username is already taken";
          } else {
            $username = trim($_POST["username"]);
          }
        } else {
          echo "Opps! Something went wrong. Please try again later";
        }

        mysqli_stmt_close($stmt);
      }
    }
  }
?>