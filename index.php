<?php

if(isset($_SESSION['username'])){

    $_SESSION['MSG']="You must log in first to view this page";
    header("location : login.php");
}

if(isset($_GET['logout'])){

    session_destroy();
    unset($_SESSION['username']);
    header("location:login.php");
}

?>

<!doctype html>
<html>
    <head>
        <title>HOME PAGE</title>
</head>
<body>

<h1>This is the home page</h1>

<p>Not a user?Then register yourself <a href="registration.php"><b>Register</b></a></p>
<p>Already a user? <a href="login.php"><b>Log In</b></a></p>

<?php
if(isset($_SESSION['success'])): ?>

<div>

<h3>

<?php

echo $_SESSION['success'];
unset($_SESSION['success']);

?>
</h3>
</div>

<?php endif ?>



<?php
if(isset($_SESSION['username'])) :  ?>
<h3>WELCOME <strong><?php echo $_SESSION['username'];  ?></strong></h3>

<button><a href="index.php?logout='1'"></a></button>

<?php endif ?>

</body>
</html>
