<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
echo "Dashboard"." ". $_SESSION['username'];

if(isset($_POST['logout'])){
    header("location:logout.php");  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>