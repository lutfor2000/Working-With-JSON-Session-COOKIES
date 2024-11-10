<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $_SESSION['username'] = $_POST['username'];
    header("location:dashboard.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
         <label for="">User Name</label>
         <input type="text" name="username" id="username">
         <label for="">Password</label>
         <input type="password" name="password" id="password">
         <button type = "submit">Login</button>
    </form>
</body>
</html>