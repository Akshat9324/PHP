<?php 


include "my.php";

$sql = "SELECT * FROM student_form";

$result = $conn->query($sql);

session_start();
if(isset($_SESSION['login_user'])){
?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

        <h2>student_form</h2>
        <?php echo " Welcome " .$_SESSION['login_user'].""; ?>  
         
      <a class="btn btn-primary" href="list.php">User List</a>
      <a class="btn btn-primary" href="newlist.php">News List</a>
      <h2><a href = "logout.php">Sign Out</a></h2> 
    </body>
<?php } ?>
</html>