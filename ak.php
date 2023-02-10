
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

   
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = $_POST['email'];
      $password = $_POST['password'];
     
      $sql = "SELECT * FROM student_form WHERE `email` = '$email' and `password` = '$password'";
      
      $result = mysqli_query($conn,$sql);
   
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       
         $_SESSION['login_user'] = $email;
          
         header("location: dashbord.php");
      }else {
         echo("Your Login Name or Password is invalid");
      }
   }
?>

<html>
   
   <head>
    <!-- this script is provided by www.htmlbestcodes.com coded by: Kerixa Inc. -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Dosis:400,600&amp;display=swap'>
<style>
* {
  border: 0;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

:root {
  font-size: calc(16px + (24 - 16)*(100vw - 320px)/ (1280 - 320));
}

body, .preloader {
  display: flex;
}

body {
  background: #000;
  color: #3df1f1;
  font: 1em Dosis, sans-serif;
  height: 100vh;
  line-height: 1.5;
  perspective: 40em;
}

.preloader {
  animation: tiltSpin 8s linear infinite;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: auto;
  width: 17em;
  height: 17em;
}
.preloader, .preloader__ring {
  transform-style: preserve-3d;
}
.preloader__ring {
  animation-name: spin;
  animation-duration: 4s;
  animation-timing-function: inherit;
  animation-iteration-count: inherit;
  font-size: 2em;
  position: relative;
  height: 3rem;
  width: 1.5rem;
}
.preloader__ring:nth-child(even) {
  animation-direction: reverse;
}
.preloader__sector {
  font-weight: 600;
  position: absolute;
  top: 0;
  left: 0;
  text-align: center;
  text-transform: uppercase;
  transform: translateZ(7rem);
}
.preloader__sector, .preloader__sector:empty:before {
  display: inline-block;
  width: 100%;
  height: 100%;
}
.preloader__sector:empty:before {
  background: linear-gradient(transparent 45%, currentColor 45% 55%, transparent 55%);
  content: "";
}
.preloader__sector:nth-child(2) {
  transform: rotateY(12deg) translateZ(7rem);
}
.preloader__sector:nth-child(3) {
  transform: rotateY(24deg) translateZ(7rem);
}
.preloader__sector:nth-child(4) {
  transform: rotateY(36deg) translateZ(7rem);
}
.preloader__sector:nth-child(5) {
  transform: rotateY(48deg) translateZ(7rem);
}
.preloader__sector:nth-child(6) {
  transform: rotateY(60deg) translateZ(7rem);
}
.preloader__sector:nth-child(7) {
  transform: rotateY(72deg) translateZ(7rem);
}
.preloader__sector:nth-child(8) {
  transform: rotateY(84deg) translateZ(7rem);
}
.preloader__sector:nth-child(9) {
  transform: rotateY(96deg) translateZ(7rem);
}
.preloader__sector:nth-child(10) {
  transform: rotateY(108deg) translateZ(7rem);
}
.preloader__sector:nth-child(11) {
  transform: rotateY(120deg) translateZ(7rem);
}
.preloader__sector:nth-child(12) {
  transform: rotateY(132deg) translateZ(7rem);
}
.preloader__sector:nth-child(13) {
  transform: rotateY(144deg) translateZ(7rem);
}
.preloader__sector:nth-child(14) {
  transform: rotateY(156deg) translateZ(7rem);
}
.preloader__sector:nth-child(15) {
  transform: rotateY(168deg) translateZ(7rem);
}
.preloader__sector:nth-child(16) {
  transform: rotateY(180deg) translateZ(7rem);
}
.preloader__sector:nth-child(17) {
  transform: rotateY(192deg) translateZ(7rem);
}
.preloader__sector:nth-child(18) {
  transform: rotateY(204deg) translateZ(7rem);
}
.preloader__sector:nth-child(19) {
  transform: rotateY(216deg) translateZ(7rem);
}
.preloader__sector:nth-child(20) {
  transform: rotateY(228deg) translateZ(7rem);
}
.preloader__sector:nth-child(21) {
  transform: rotateY(240deg) translateZ(7rem);
}
.preloader__sector:nth-child(22) {
  transform: rotateY(252deg) translateZ(7rem);
}
.preloader__sector:nth-child(23) {
  transform: rotateY(264deg) translateZ(7rem);
}
.preloader__sector:nth-child(24) {
  transform: rotateY(276deg) translateZ(7rem);
}
.preloader__sector:nth-child(25) {
  transform: rotateY(288deg) translateZ(7rem);
}
.preloader__sector:nth-child(26) {
  transform: rotateY(300deg) translateZ(7rem);
}
.preloader__sector:nth-child(27) {
  transform: rotateY(312deg) translateZ(7rem);
}
.preloader__sector:nth-child(28) {
  transform: rotateY(324deg) translateZ(7rem);
}
.preloader__sector:nth-child(29) {
  transform: rotateY(336deg) translateZ(7rem);
}
.preloader__sector:nth-child(30) {
  transform: rotateY(348deg) translateZ(7rem);
}

/* Animations */
@keyframes tiltSpin {
  from {
    transform: rotateY(0) rotateX(30deg);
  }
  to {
    transform: rotateY(1turn) rotateX(30deg);
  }
}
@keyframes spin {
  from {
    transform: rotateY(0);
  }
  to {
    transform: rotateY(1turn);
  }
}
</style>
<div class="preloader">
<div class="preloader__ring">
<div class="preloader__sector">A</div>
<div class="preloader__sector">K</div>
<div class="preloader__sector">S</div>
<div class="preloader__sector">H</div>
<div class="preloader__sector">A</div>
<div class="preloader__sector">T</div>
<div class="preloader__sector">.</div>    
<div class="preloader__sector">.</div>
<div class="preloader__sector">.</div>
<div class="preloader__sector">.</div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
</div>
<div class="preloader__ring">
<div class="preloader__sector">A</div>
<div class="preloader__sector">K</div>
<div class="preloader__sector">S</div>
<div class="preloader__sector">H</div>
<div class="preloader__sector">A</div>
<div class="preloader__sector">T</div>
<div class="preloader__sector">.</div>
<div class="preloader__sector">.</div>
<div class="preloader__sector">.</div>
<div class="preloader__sector">.</div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
<div class="preloader__sector"></div>
</div>
</div><a target='_blank' href='www.htmlbestcodes.com' style='font-size: 8pt; text-decoration: none'>Html Best Codes</a> 
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                
                  <label>Email :</label><input type = "text" name ="email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/>&nbsp;&nbsp;&nbsp;
                  <input type=reset value="clear" name="clear"><br />
               </form>
               
               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>