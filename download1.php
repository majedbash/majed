<?php
  if (isset($_POST['submit'])) {
    $file_id = $_POST['file_id'];
    // database connection
    $conn = mysqli_connect('localhost', 'root', '', 'student');
    // get the file information from the database
    $query = "SELECT f_name, f_path FROM file WHERE ID = '$file_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $file_name = $row['f_name'];
    $file_path = $row['f_path'];
    // download the file
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
    header('Content-Length: ' . filesize($file_path));
    readfile($file_path);
    exit;
  }
?>