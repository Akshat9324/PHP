<?php 

include "my.php";

$sql = "SELECT * FROM news";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>news</h2>
        

<table class="table">

    <thead>

        <tr>

        <th>Title</th>

        <th>Description</th>

        <th>Imagename</th>

        <th>Author</th>

        

        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['title']; ?></td>

                    <td><?php echo $row['description']; ?></td>

                    <td><img src="<?php echo $row['name']; ?>" width="200" height="125"></td>

                    <td><?php echo $row['author']; ?></td>

              

                    <td><a class="btn btn-info" href="newsupdate.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                    <a class="btn btn-danger" href="newsdelete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>

