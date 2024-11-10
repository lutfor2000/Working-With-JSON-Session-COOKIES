<?php
$parson =[
    "Name" => "Lutfor Rhaman",
    "Age" => 24,
    "Hobbies" => ["Programmer","Developer"],
];

$json = json_encode($parson,JSON_PRETTY_PRINT);
file_put_contents('parson.json',$json);