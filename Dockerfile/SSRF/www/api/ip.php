<?php
error_reporting(0);

$domain = $_POST['domain'];
$ip = "1.1.1.1";
$site_title = "";
$content = "";

try {
    $ip = gethostbyname($domain);
} catch (Exception $e)
{
    $ip = "域名解析异常";
}

if(!preg_match("/file:/i", $domain)){
    try {
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $domain);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
        $data = curl_exec($c);
        $content = base64_encode($data);
        curl_close($c);
        $pos = strpos($data,'utf-8');
        if($pos===false){
            $data = iconv("gbk","utf-8",$data);
        }
        preg_match("/<title>(.*)<\/title>/i",$data, $title);
        $site_title =  $title[1];
    } catch (Exception $e)
    {
        $content = "error";
        $site_title = "网站访问异常";
    }
} else
{
    $content = "error";
    $site_title = "网站访问异常";
}



$ip_addr = array (
    "ip" => $ip,
    "title" => $site_title,
    "res" => $content
);

header('Content-Type:text/json;charset=utf-8');
$ip_json = json_encode($ip_addr);
echo $ip_json;