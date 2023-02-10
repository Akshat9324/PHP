<html>
    <body>
        
        <form action ="welcome.php" method="post">
         Name:<input type="text" name="name"><br>
         Email:<input type="text" name="email"><br>
         Gender:<input type="radio" name="gender" value="male">
                <label for="male">male</label>
                <input type="radio" name="gender" value="female">
                <label for="female">female</label>
                <br>
        Games:<input type="checkbox" name="game[]" value="table tennis">
               <label for="table tennis">table tennis</label>
               <input type="checkbox" name="game[]" value="tennis">
               <label for="tennis"> tennis</label><br>        

         <input type="submit">   
          </form>
          
</body>   
</html>