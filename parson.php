<?php
$parson =[
    "Name" => "Lutfor Rhaman Shanto",
    "Age" => 34,
    "Hobbies" => ["Programmer","Software Developer"],
];
$json = json_encode($parson,JSON_PRETTY_PRINT);
echo $json;
// echo serialize($parson);
// echo $parson['Name']; 

$number01 = 70;
$number02 = 40;
$number03 = 80;
if($number01 > $number02 && $number01>$number03)
{
    echo "Big Number1 is : {$number01}";
}
elseif($number02 > $number01 && $number02>$number03)
{
    echo "Largest Number2 is : {$number02}";
}
elseif($number03 > $number01 && $number03 > $number02)
{
    echo "Largest Number3 is : {$number03}";
}
elseif($number01 == $number02 || $number01 == $number03)
{
    echo "Number is Same";
}
elseif($number02 == $number01 || $number02 == $number03)
{
    echo "Number is Same";
}
elseif($number03 == $number01 || $number03 == $number02)
{
    echo "Number is Same";
}
else{
    echo "Number Is Error"; 
}