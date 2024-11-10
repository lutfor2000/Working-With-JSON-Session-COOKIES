<?php
$username = "shanto";
$password = "S123455";

$userData = file_get_contents("user.json");
$users = json_decode($userData, true);
// echo $user["lutfor"];

foreach($users as $u => $p ){
    if($u == $username && $p == $password){
        echo "Login Successful !";
        exit;
    }
}
echo "Login Failed !";

