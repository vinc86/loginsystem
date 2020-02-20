
<?php 
session_start();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Registration Form</title>
</head>
<body>

    <div class="container">

        <form action="includes/signup.inc.php" method="post">
            <div class="inputGroup">
                <input type="text" name ="usrName" placeholder="Username...">
            </div>
            <div class="inputGroup">
                <input type="email" name ="usrEmail" placeholder="Email...">
            </div>
            <div class="inputGroup">
                <input type="text" name ="usrPwd" placeholder="Password...">
            </div>
            <div class="inputGroup">
                <input type="text" name ="confirmPwd" placeholder="Confirm password...">
            </div>
            <div class="inputButton">
                <input type="submit" name ="submit" value="Register">
            </div>
        </form>
        <div class="inputGroup">
        <p>Already registered? Login <a href="login.php">here</a></p>
        </div>
        

    </div>
    
</body>
</html>