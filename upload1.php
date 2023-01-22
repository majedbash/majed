<?php

$file = $_FILES['fileToUpload'];

$fileName = $file['name'];
$fileTmpName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileType = $file['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('doc', 'docx' , 'txt');

if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
        if ($fileSize < 1000000) {

            $fileDestination = 'upload/' . $fileName; //replace 'your-directory' with the actual directory on your localhost where you want to store the files
            move_uploaded_file($fileTmpName, $fileDestination);
            echo "Upload successful.";
        } else {
            echo "File is too large.";
        }
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Cannot upload files of this type.";
}

$conn = mysqli_connect('localhost', 'root','', 'student');
$query = "SELECT MAX(ID) as max_id FROM file";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
$max_id = $row["max_id"];

$file_id = $max_id == NULL ? 1 : $max_id + 1;

// database connection
// insert the file information into the database
$query = "INSERT INTO file (ID,f_name,f_size,f_ext,f_path) VALUES ( '$file_id' ,'$fileName', '$fileSize', '$fileActualExt', ' $fileDestination')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "File information stored in the database";
} else {
    echo "Error storing file information in the database";
}
?>