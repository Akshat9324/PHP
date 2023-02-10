 <?php
session_start();
?> 
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
   <h1>Welcome</h1> 
   <?php echo $_SESSION['login_user']; ?>   
   <h2><a href = "logout.php">Sign Out</a></h2> 

   </body>
   
</html>