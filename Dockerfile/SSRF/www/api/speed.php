<?php
error_reporting(0);
$domain = $_POST['domain'];
$domain_speed = rand(10,100);

function get_score($speed){
    if($speed < 25){
        return 0.20;
    } elseif ($speed > 25 && $speed <= 50){
        return 0.40;
    } elseif ($speed > 50 && $speed <= 75){
        return 0.60;
    } elseif ($speed > 75 && $speed <= 100){
        return 0.80;
    }
}


$domain_speed_arr = array(
    "speed" => $domain_speed,
    "score" => get_score($domain_speed),
    "res" => base64_encode($domain)
);

header('Content-Type:text/json;charset=utf-8');
$domain_speed_json = json_encode($domain_speed_arr);
echo $domain_speed_json;