<?php
$parsonProfile =[
    "name" => "Lutfor Rhaman Shanto",
    "age" => 24,

    "address" =>[
        "city" => "Dhaka",
        "district"=>"Rangpur",
        "Thana" => "Badarjang",
    ],

    "contact" => [
        "phone" => "+88017989608",
        "email" => "lutfar@gmail.com",
        "web" => "www.lrs.com",
    ]
];

$json = json_encode($parsonProfile, JSON_PRETTY_PRINT);
file_put_contents("parsonProfile.json",$json);