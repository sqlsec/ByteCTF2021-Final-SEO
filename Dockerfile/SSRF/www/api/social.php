<?php
error_reporting(0);

function token($length){
    $str = md5(time());
    $token = substr($str,5,$length);
    return $token;
}


$year = rand(1, 10);
$moth = rand(1,12);
$day = rand(1,31);
$date = $year."年".$moth."月".$day."天";
$mail = token(rand(3, 6))."@doamin.bytedance.com";

$social_arr = array (
    "date" => $date,
    "mail" => $mail
);

header('Content-Type:text/json;charset=utf-8');
$social_json = json_encode($social_arr);
echo $social_json;