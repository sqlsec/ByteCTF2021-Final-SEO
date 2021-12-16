<?php
error_reporting(0);
$domain = $_POST['domain'];
$rank = rand(1000, 999999);

$category_arr = array("科技数码", "信息安全", "视频娱乐", "媒体音乐", "生活电商", "医疗教育", "爱心公益");
$category = $category_arr[array_rand($category_arr, 1)];

$rank_arr = array (
    "rank" => $rank,
    "cate" => $category,
    "res" => base64_encode($domain)
);

header('Content-Type:text/json;charset=utf-8');
$rank_json = json_encode($rank_arr);
echo $rank_json;