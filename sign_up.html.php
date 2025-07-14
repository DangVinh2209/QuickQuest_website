<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1 class="login">Register</h1>
    <form class="login_form" action="sign_up.php" method="post">
        Full name<input class='login_id' type='text' name='name' size='20' required>
        Email <input class="login_id" type="text" name="email" size="20" required>
        Password<input class="login_password" type="password" name="password" size="20" required>
        Confirm password<input class="login_password" type="password" name="confirm_password" size="20" required>  
        <input class="login_submit" type="submit" value="Sign Up" name='submit'>
        <?= $output?>
    </form>
    <form action="login.html">
        <input class="login_submit" type="submit" value='Log In'>
    </form>
</body>
</html>