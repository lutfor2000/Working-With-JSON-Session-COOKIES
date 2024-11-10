<?php
$parsonProfileData = file_get_contents("parsonProfile.json");
$profile = json_decode($parsonProfileData, true);
echo $profile["name"];