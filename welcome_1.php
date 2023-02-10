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

$name = $_POST["fname"];
$lname= $_POST["lname"];
$email= $_POST["email"];
$password= $_POST["password"];
$phone= $_POST["phone"];
$gender= $_POST["gender"];
$game= implode (",",$_POST["game"]);

  
$sql = "INSERT INTO student_form (firstname,lastname,email,password,phone,gender,game)
VALUES ('$name','$lname','$email','$password','$phone','$gender','$game')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>
