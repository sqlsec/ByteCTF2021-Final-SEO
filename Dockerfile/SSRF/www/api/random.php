<?php
error_reporting(0);

function randomkeys($length)
{
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
    for($i=0;$i<$length;$i++)   
    {   
        $key .= $pattern{mt_rand(0,35)};
    }   
    return $key;   
}

$root_domain = $_GET['domain'];

$domain1 = randomkeys(rand(2, 4)).".bytedance.com";
$domain2 = randomkeys(rand(2, 4)).".bytedance.com";
$domain3 = randomkeys(rand(2, 4)).".bytedance.com";
$domain4 = randomkeys(rand(2, 4)).".bytedance.com";
$domain5 = randomkeys(rand(2, 4)).".bytedance.com";

$domain_speed1 = rand(10,100);
$domain_speed2 = rand(10,100);
$domain_speed3 = rand(10,100);
$domain_speed4 = rand(10,100);
$domain_speed5 = rand(10,100);


function get_score($speed){
    if($speed < 25){
        return "卡";
    } elseif ($speed > 25 && $speed <= 50){
        return "良";
    } elseif ($speed > 50 && $speed <= 75){
        return "中";
    } elseif ($speed > 75 && $speed <= 100){
        return "快";
    }
}

function get_style($speed){
    if($speed < 25){
        return "text-danger";
    } elseif ($speed > 25 && $speed <= 50){
        return "text-warning";
    } elseif ($speed > 50 && $speed <= 75){
        return "text-info";
    } elseif ($speed > 75 && $speed <= 100){
        return "text-success";
    }
}

$other_speed_arr = array(
    "domain1" => $domain1,
    "speed1" => $domain_speed1,
    "score1" => get_score($domain_speed1),
    "style1" => get_style($domain_speed1),

    "domain2" => $domain2,
    "speed2" => $domain_speed2,
    "score2" => get_score($domain_speed2),
    "style2" => get_style($domain_speed2),

    "domain3" => $domain3,
    "speed3" => $domain_speed3,
    "score3" => get_score($domain_speed3),
    "style3" => get_style($domain_speed3),

    "domain4" => $domain4,
    "speed4" => $domain_speed4,
    "score4" => get_score($domain_speed4),
    "style4" => get_style($domain_speed4),

    "domain5" => $domain5,
    "speed5" => $domain_speed5,
    "score5" => get_score($domain_speed5),
    "style5" => get_style($domain_speed5),

    "res" => base64_encode($root_domain)
);

header('Content-Type:text/json;charset=utf-8');
$domain_speed_json = json_encode($other_speed_arr);
echo $domain_speed_json;