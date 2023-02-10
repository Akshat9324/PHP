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
    
   
    <form action ="newssubmit.php" method="post" name="form" enctype="multipart/form-data" >
        
     <div class="m-4">
  
        <div class="row mb-3">
            <label for="title" class="col-sm-1 col-form-label">Title</label>
            <div class="col-sm-5">
            <input type="text" name="title" id="title"class="form-control" >   
            </div>
        </div><br> 
       
         <div class="m-4">
  
        <div class="row mb-3">
            <label for="description" class="col-sm-1 col-form-label">Description</label>
            <div class="col-sm-5">
            <textarea id="description" name="description" class="form-control" ></textarea>
            </div>
        </div><br> 
         



            <label>Upload Image</label>
          
            <input type="file" name="img"  class="form-control"> 
      
     

        
    
        <div class="m-4">
        <div class="row mb-3">
        <label for="author" class="col-sm-1 col-form-label">Author</label>
        <div class="col-sm-5">
        <select id="author" name="author" class="...">
    <?php 
            $list=mysqli_query ($conn,"select * from student_form order by id");
            while($row_list=mysqli_fetch_assoc($list)){
                ?>        
                 
                    
                    <option value="<?php echo $row_list['id']; ?>"> <?php echo $row_list['firstname'];?> </option>
              
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