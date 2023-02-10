<?php 

include "my.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['fname'];

        $lastname = $_POST['lname'];

        $user_id = $_POST['user_id'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $phone = $_POST['phone'];

        $gender = $_POST['gender']; 

        $game = implode (",",$_POST["game"]);

        $sql = "UPDATE `student_form` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`phone`='$phone',`gender`='$gender',`game`='$game' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {
                                                
    $user_id = $_GET['id']; 
    
    $sql = "SELECT * FROM `student_form` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
           
            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $email = $row['email'];

            $password  = $row['password'];

            $phone = $row['phone'];

            $gender = $row['gender'];

            
            $game = explode(",",$row['game']);

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <html>
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
    
   
    <form  method="post" name="form" >
        
     <div class="m-4">
  
        <div class="row mb-3">
            <label for="inputname" class="col-sm-1 col-form-label">First name</label>
            <div class="col-sm-5">
            <input type="text" name="fname" id="inputfname"class="form-control"value="<?php echo $first_name; ?>" >
            </div>
        </div><br> 
        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
       
         <div class="m-4">
  
        <div class="row mb-3">
            <label for="inputlname" class="col-sm-1 col-form-label">Last name</label>
            <div class="col-sm-5">
            <input type="text" name="lname" id="inputlname" class="form-control" value="<?php echo $lastname; ?>" >
            </div>
        </div><br> 
         
         <div class="m-4">

        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
            <div class="col-sm-5">
            <input type="text" name="email" id="inputEmail" class="form-control" value="<?php echo $email; ?>"> 
            </div>
        </div><br> 

        
         <div class="m-4">
    
        <div class="row mb-3">
            <label for="inputpassword" class="col-sm-1 col-form-label">password</label>
            <div class="col-sm-5">
            <input type="password" name="password" id="inputpassword" class="form-control" value="<?php echo $password; ?>">
            </div>
        </div><br>
         
         <div class="m-4">

        <div class="row mb-3">
            <label for="inputphone" class="col-sm-1 col-form-label">Phone</label>
            <div class="col-sm-5">
            <input type="text" name="phone" id="inputphone" class="form-control"value="<?php echo $phone; ?>">
            </div>
        </div><br>

            <div class="form-check">
            Gender:<input type="radio" name="gender" value="male"  class="form-check-input"id="Radio1" <?php if($gender == 'male'){ echo "checked";} ?>>
                <label for="Radio1" class="form-check-label" >male</label>
                <input type="radio" name="gender" value="female" class="form-check-input"id="Radio2" <?php if($gender == 'female'){ echo "checked";} ?>>
                <label for="Radio2" class="form-check-label">female</label><br><br>
            </div>
    
         Games:<br><input type="checkbox" name="game[]" value="cricket" <?php if(in_array("cricket",$game)){ echo "checked";} ?>>
               <label for="cricket">cricket</label><br>    
               <input type="checkbox" name="game[]" value="table tennis" <?php if(in_array("table tennis",$game)){ echo "checked";} ?>>
               <label for="table tennis">table tennis</label><br>
               <input type="checkbox" name="game[]" value="football" <?php if(in_array("football",$game)){ echo "checked";} ?>>
               <label for="football"> football</label><br>        
               <input type="checkbox" name="game[]" value="hockcy" <?php if(in_array("hockcy",$game)){ echo "checked";} ?>>
               <label for="hockcy">hockcy</label><br><br>       
               <input type=submit value="update" name="update">
               
               
          </form>

        </body>

        </html> 

    <?php

    } else{ 

        print_r("Something went Wrong");
        
    } 

}

?> 