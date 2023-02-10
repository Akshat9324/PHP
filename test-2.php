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
    
   
    <form action ="welcome_1.php" method="post" name="form"  onsubmit="return validateform()">
        
     <div class="m-4">
  
        <div class="row mb-3">
            <label for="inputname" class="col-sm-1 col-form-label">First name</label>
            <div class="col-sm-5">
            <input type="text" name="fname" id="inputfname"class="form-control" >   
            </div>
        </div><br> 
       
         <div class="m-4">
  
        <div class="row mb-3">
            <label for="inputlname" class="col-sm-1 col-form-label">Last name</label>
            <div class="col-sm-5">
            <input type="text" name="lname" id="inputlname" class="form-control" >
            </div>
        </div><br> 
         
         <div class="m-4">

        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
            <div class="col-sm-5">
            <input type="text" name="email" id="inputEmail" class="form-control"> 
            </div>
        </div><br> 

        
         <div class="m-4">
    
        <div class="row mb-3">
            <label for="inputpassword" class="col-sm-1 col-form-label">password</label>
            <div class="col-sm-5">
            <input type="password" name="password" id="inputpassword" class="form-control">
            </div>
        </div><br>
         
         <div class="m-4">

        <div class="row mb-3">
            <label for="inputphone" class="col-sm-1 col-form-label">Phone</label>
            <div class="col-sm-5">
            <input type="text" name="phone" id="inputphone" class="form-control">
            </div>
        </div><br>

            <div class="form-check">
            Gender:<input type="radio" name="gender" value="male"  class="form-check-input"id="Radio1" >
                <label for="Radio1" class="form-check-label" >male</label>
                <input type="radio" name="gender" value="female" class="form-check-input"id="Radio2">
                <label for="Radio2" class="form-check-label">female</label><br><br>
            </div>
                
         Games:<br><input type="checkbox" name="game[]" value="cricket">
               <label for="cricket">cricket</label><br>    
               <input type="checkbox" name="game[]" value="table tennis">
               <label for="table tennis">table tennis</label><br>
               <input type="checkbox" name="game[]" value="football">
               <label for="football"> football</label><br>        
               <input type="checkbox" name="game[]" value="hockcy">
               <label for="hockcy">hockcy</label><br><br>       
               <input type=submit value="submit" name="s">
               <input type=reset value="clear" name="s1">
               
          </form>
        <script>  
        function validateform(){  
                var fname= document.form.fname.value;  
                var lname= document.form.lname.value;
                var phone= document.form.phone.value;  
                var email= document.form.email.value;    
                var phoneno = /^\d{10}$/;
                var password= document.form.password.value;  
                var atposition= email.indexOf("@");  
                var dotposition= email.lastIndexOf("."); 

                if (fname=='' || lname=='' ){  
                  alert("Name can't be blank");  
                  return false;  
                }else if(password.length<6){  
                  alert("Password must be at least 6 characters long.");  
                  return false;
                }
                else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){
                    
                    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                    return false;  
                }
                else if(phone == "" || phone == phoneno)
                {
                    alert("Enter valid number");
                    return false;
                }
        }  

</script>    

    </body>
</html>