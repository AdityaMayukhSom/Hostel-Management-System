<?php

session_start();

//Initializing Variables
$username="";
$email="";
$errors=array();

//Connect to a Database

$db=mysqli_connect('localhost','root','','database'); 

if($db){
    echo "Connection Successful";
}



//Register users

$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$fatherName=$_POST['fatherName'];
$motherName=$_POST['motherName'];
$department=$_POST['department'];
$rollNumber=$_POST['rollNumber'];
$year=$_POST['year'];
$address=$_POST['address'];
$bloodGroup=$_POST['bloodGroup'];
$password=$_POST['password'];


//Form Validation

if(empty($roll)){
    array_push($errors, "Roll Number is required");
}
if(empty($username)){
    array_push($errors, "Name is required");
}
if(empty($email)){
    array_push($errors, "Email is required");
}
if(empty($password)){
    array_push($errors, "Password is required");
}

//Check db for existing user with same username

$user_check_query="SELECT * FROM user information WHERE Name='$username'and Email='$email' LIMIT 1";
$result=mysqli_query($db, $user_check_query);
$user=mysqli_fetch_array($result);

if($user){
    if($user['Name']===$username){
        array_pushh($errors, "Username already exists");
    }
    if($user['Email']===$email){
        array_pushh($errors, "This email id has already been used");
    }
}
if(count($errors)===0){
    $password=md5($password);//This will encrypt the password
    $query="INSERT INTO user information (Name,Email,Contact_Number,Father_Name,Mother_Name,Department,Roll_Number,Year,Permanent_Address,Blood_Group,,Password) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    mysqli_query($db, $query);
    $SESSION['Name']=$username;
    $SESSION['success']="You are now logged in";

    header('location:index.php');

    
}

//Login user

if(isset($_POST['login_user'])){
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, $_POST['password']);

    if(empty($username)){
        array_push($errors,"Username is required");
    }

    if(empty($password)){
        array_push($errors,"Password is required");
    }

    if(count($errors)==0){
        $password=md5($password);

        $query="SELECT * FROM user information WHERE username='$username' AND password='$password'";
        $result=mysqli_query($db, $query);

    if(mysqli_num_result($result)){

        $_SESSION['username']=$username;
        $_SESSION['success']="Logged in successfully";
        header('location:index.php');
    }
    else{
        array_push($errors, "Wrong username or password.Please try again");
    }
    }
}


?>