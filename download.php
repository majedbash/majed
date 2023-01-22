<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="DS.css">
<html>
<head>
  <title>Download Page</title>
</head>
<body>
  <form action="download1.php" method="post">
    <h1>Download a File</h1>
    <select name="file_id">
      <?php
        // database connection
        $conn = mysqli_connect('localhost', 'root', '', 'student');
        // get all the files from the database
        $query = "SELECT ID, f_name FROM file";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
          echo "<option value='".$row['ID']."'>".$row['f_name']."</option>";
        }
      ?>
    </select>
    <input type="submit" value="Download" name="submit">
  </form>
</body>
</html>