<?php
error_reporting(0);
$domain = $_GET['domain'];
$rank_baidu = rand(1,9);
$rank_bd = rand(1,9);
$rank_toutiao = rand(1,9);
$rank_360 = rand(1,9);
$rank_sogou = rand(1,9);
$rank_shenma = rand(1,9);



$seo = array (
    "rank_baidu" => $rank_baidu,
    "rank_bd" => $rank_bd,
    "rank_toutiao" => $rank_toutiao,
    "rank_360" => $rank_360,
    "rank_sogou" => $rank_sogou,
    "rank_shenma" => $rank_shenma,
    "res" => base64_encode($domain)
);

header('Content-Type:text/json;charset=utf-8');
$seo_json = json_encode($seo);
echo $seo_json;
?>