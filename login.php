<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect('localhost', 'root', '', 'student');
  $query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    header("Location: upload.php");
  } else {
    echo "Incorrect username or password.";
  }