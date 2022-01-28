
<!doctype html>
<html>
    <head>
        <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>

        <form action="server.php" method="post">

        <?php include('errors.php') ?>

        <div>
            <label for="username">Name</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="contact">Contact_Number</label>
            <input type="text" name="contact" reqired>
        </div>

        <div>
            <label for="fatherName">Father_Name</label>
            <input type="text" name="fatherName" reqired>
        </div>

        <div>
            <label for="motherName">Mother_Name</label>
            <input type="text" name="motherName" reqired>
        </div>
        
        <div>
            <label for="department">Department</label>
            <input type="text" name="department" reqired>
        </div>

        <div>
            <label for="rollNumber">Roll_Number</label>
            <input type="text" name="rollNumber" reqired>
        </div>


        <div>
            <label for="year">Year</label>
            <input type="text" name="year" reqired>
        </div>



        <div>
            <label for="address">Permanent_Address</label>
            <input type="text" name="address" reqired>
        </div>

        <div>
            <label for="bloodGroup">Blood_Group</label>
            <input type="text" name="bloodGroup" reqired>
        </div>

        <div>
            <label for="identification">Image_of_candidate</label>
            <input type="image" name="identification" reqired>
        </div>

        <div>
            <label for="identity">ID_Proof</label>
            <input type="image" name="identity" reqired>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="text" name="password" required>
        </div>

        <button type="submit">Submit</button>

        <p>Already a user? <a href="login.php"><b>Log In</b></a></p>
</form>

</body>
</html>