<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="registrationprocess.php" method="post">
        <label for="name">Username</label>
        <input type="text" name="name" required><br><br>
        <label for="email">Email</label>
        <input type="email" name="email" required><br><br>
        <label for="dob">DoB</label>
        <input type="date" name="dob"><br><br>
        <label for="phnumber">P.h number</label>
        <input type="text" name="phnumber"  required><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Register">
        <a href="login.php">already have an account</a>
    </form>
</body>
</html>