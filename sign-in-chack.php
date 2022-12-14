<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $email = validate($_POST['email']);
  $upassword = validate($_POST['password']);

  if (empty($email)) {
    header("Location: sign-in.php?error=User Email is required");
    exit();
  } else if (empty($upassword)) {
    header("Location: sign-in.php?error=Password is required");
    exit();
  } else {
    // hashing the password
    // $upassword = md5($upassword);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$upassword'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['email'] === $email && $row['password'] === $upassword) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: user.php");
        exit();
      } else {
        header("Location: sign-in.php?error=Incorect User name or password");
        exit();
      }
    } else {
      header("Location: sign-in.php?error=Incorect User name or password");
      exit();
    }
  }
} else {
  header("Location: sign-in.php");
  exit();
}
