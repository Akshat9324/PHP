<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="form";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$title = $_POST["title"];
$description= $_POST["description"];
$imagename= $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$author= $_POST["author"];
$folder = "./" . $imagename;

if(move_uploaded_file($tempname, $folder)) {
      echo "<h3>  Image uploaded successfully!</h3>";
} 
  else {
  echo "<h3>  Failed to upload image!</h3>";
}
  
$sql = "INSERT INTO news(title,description,name,author)
VALUES ('$title','$description','$imagename','$author')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  
  $conn->close();

?>