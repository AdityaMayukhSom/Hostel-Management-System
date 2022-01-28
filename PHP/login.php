<!doctype html>
<html>
    <head>
        <title>Log In</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Log In</h2>
        </div>

        <form action="login.php" method="post">

        <div>
            <label for="username">Name</label>
            <input type="text" name="username" reqired>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" reqired>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="text" name="password" reqired>
        </div>

        <button type="submit" name="reg_user">Submit</button>

        <p>Not a user?Then register yourself <a href="registration.php"><b>Register</b></a></p>
</form>

</body>
</html>