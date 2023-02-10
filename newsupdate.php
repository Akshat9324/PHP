<?php 

include "my.php";

    if (isset($_POST['update'])) {

        $title = $_POST['title'];

        $description = $_POST['description'];

        $name = $_POST['imagename'];

        $author = $_POST['author'];

        $user_id = $_POST['user_id'];

  
        $sql = "UPDATE `news` SET `title`='$title',`description`='$description',`name`='$name',`author`='$author', WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {
                                                
    $user_id = $_GET['id']; 
    
    $sql = "SELECT * FROM `news` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
           
            $title = $row['title'];

            $description = $row['description'];

            $name = $row['name'];

            $author  = $row['author'];


            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <html>
    <?php   
            require"my.php"; 
    ?>
<!-- <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Horizontal Form Layout</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head> -->
    <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head> 
    <body>
    
   
    <form action ="newsupdate.php" method="post" name="form" enctype="multipart/form-data">
        
     <div class="m-4">
  
        <div class="row mb-3">
            <label for="title" class="col-sm-1 col-form-label">Title</label>
            <div class="col-sm-5">
            <input type="text" name="title" id="title"class="form-control" value="<?php echo $title; ?>">   
            </div>
        </div><br> 
       
         
         
        <div class="row mb-3">
            <label for="description" class="col-sm-1 col-form-label">Description</label>
            <div class="col-sm-5">
            
            <textarea id="description" name="description" class="form-control"><?php echo($description);?></textarea>
                
        </div>
        </div><br> 
        
        <label class="form-label">Upload Image</label>
        <div class="row mb-3">
        
        <div class="col-sm-5">       
            <input type="file" name="img"  class="form-control">
                <img src="<?php echo $name; ?>" width="200" height="125"> <br>
        </div>
        </div>
        
        <div class="m-4"><br>
        <div class="row mb-3">
        <label for="author" class="col-sm-1 col-form-label">Author</label>
        <div class="col-sm-5">
        <select id="author" name="author" class="...">
            

    <?php 
            $list=mysqli_query ($conn,"select * from student_form order by id");
            while($row_list=mysqli_fetch_assoc($list)){               
                ?>        
                <?php if($author == $row_list['id']) { ?>
                    <option value="<?php echo $author['id']; ?>" selected> <?php echo $row_list['firstname'];?> </option>
                 <?php } else { ?>
                    <option value="<?php echo $author['id']; ?>"> <?php echo $row_list['firstname'];?> </option>
                <?php } ?>
                 <?php

                    }?>
                  </select>
                </div>
        </div>
        </div><br>
                     <input type=submit value="submit" name="s">
                     <input type=reset value="clear" name="s1">
               
        
          </form>
       
    </body>
</html>
    <?php

    } else{ 

        print_r("Something went Wrong");
        
    } 

}

?> 