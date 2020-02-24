

<?php require "./layout/header.php"; ?>


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

<?php require "./layout/footer.php"; ?>

