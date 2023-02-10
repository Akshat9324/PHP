<html>
<body>
<?php $name = $_POST["name"];?>
Welcome <?php echo $name; ?><br>
<?php $email = $_POST["email"];?>
Your email address is: <?php echo $email; ?><br>
Gender:<?php echo $_POST["gender"];?><br>
Games:<?php print_r(implode(", ", $_POST["game"])); ?><br>
</body>
</html>     