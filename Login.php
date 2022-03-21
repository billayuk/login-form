<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for registry</title>
</head>
<body>
    <h2>Login successfull</h2>
    <p>press next to go to the next page</p>
    <form method = "post" action = "Login_continue.php">
     <input type="hidden" name="enteredname" value="<?php echo $_POST["username"];?>"/>
     <p><input type="submit" name ="Next" value="next"/></p>
    </form>

</body>
</html>