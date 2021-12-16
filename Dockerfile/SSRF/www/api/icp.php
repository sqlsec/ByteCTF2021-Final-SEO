<?php
error_reporting(0);

$domain = $_POST['domain'];
$china_address_array = array("黑", "青", "台", "黔", "鲁", "粤", "苏", "浙", "赣" , "京");
$china_address = $china_address_array[array_rand($china_address_array, 1)];

$num_1 = rand(10000000, 99999999);
$num_2 = rand(1,10);

$name_array = array("张伟", "王敏", "王芳", "王伟", "李伟", "王静", "张敏", "李娜", "王磊" , "李杰", "张杰", "王超", "刘军");
$name  = $name_array[array_rand($name_array, 1)];

$kind_array = array("个人", "企业");
$kind = $kind_array[array_rand($kind_array, 1)];

$rank_arr = array(
    "icp" => $china_address."ICP备".$num_1."号"."-".$num_2,
    "name" => $name,
    "kind" => $kind,
    "res" => base64_encode($domain)
);

header('Content-Type:text/json;charset=utf-8');
$rank_json = json_encode($rank_arr);
echo $rank_json;