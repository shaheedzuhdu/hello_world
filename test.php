<?php
include_once 'conn.php';

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql="INSERT INTO tbldb (`firstname`, `lastname`, `email`, `username`, `password`)
    VALUES ($firstname,$lastname,$email,$username,$password)";
    if (mysqli_connect($conn,$sql)){
        header("location:test.php?signup=saved");
    }else{
        header("location:test.php?signup=not saved");
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <h1>Register Here</h1>
            <p>Firstname</p>
        <input type="text" name="firstname">
        <p>Lastname</p>
        <input type="text" name="lastname">
        <p>Email</p>
        <input type="text" name="email">
        <p>Username</p>
        <input type="text" name="username">
        <p>Password</p>
        <input type="text" name="password">
       <br>
        <br>
        <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>