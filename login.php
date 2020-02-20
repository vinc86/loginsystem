<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Login form</title>
</head>
<body>


<div class="container">
<form action="includes/login.inc.php" method="post">
            <div class="inputGroup">
                <input type="text" name ="usrNameOrEmail" placeholder="Username/Email...">
            </div>
            <div class="inputGroup">
                <input type="text" name ="usrPwd" placeholder="Password...">
            </div>
            <div class="inputButton">
                <input type="submit" name ="submit" value="Login">
            </div>
        </form>
        <div class="inputGroup">
        <p>Not registered? Signup <a href="signup.php">here</a></p>
        </div>
</form>        

</div>



</body>
</html>