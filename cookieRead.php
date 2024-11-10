<?php
$cookie = $_COOKIE['country'] ?? null;
if($cookie){
    echo "Your Favourite fruti is {$cookie}";
}
else{
    echo "Cookie Not";
}