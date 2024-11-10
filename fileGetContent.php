<?php
$jsonData = file_get_contents("parson.json");
$parson = json_decode($jsonData);
//This is Decoder
echo "======================Decoder=======================> \n"; 
echo $parson->Name,"\n";
echo $parson->Age,"\n";
// var_dump($parson);


