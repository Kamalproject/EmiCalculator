<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link style="stylesheet" href="login.css">
    </head>
    <body>
        <form action="loginprocess.php" method="post">
            <lable for="username">Email</lable>
            <input type="email" name="email" required><br><br>
            <label for="password">Password</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>