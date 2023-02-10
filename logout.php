<?php
   session_start();
   
   if(session_destroy()) {
        echo("You are successfully logged out");
        header("Location: login1.php");
   }
?>