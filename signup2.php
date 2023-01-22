<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = mysqli_connect('localhost', 'root', '', 'student');
  $query = "INSERT INTO student (user_id, username, password) VALUES ('$email ', '$username', '$password')";
  $result = mysqli_query($conn, $query);

  if ($result) {
  header("Location: index.php");
  } else {
    echo "Signup failed.";
  }
?>
