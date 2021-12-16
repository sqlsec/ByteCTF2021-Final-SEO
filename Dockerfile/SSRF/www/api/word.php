<?php
error_reporting(0);

// 接受 GET 方式传递过来的 file 值
$f_name = $_GET['src'];
$file_path = "../resources/".$f_name;

if(file_exists($file_path)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file_path).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));
    flush();
    readfile($file_path);
    die();
} else {
    http_response_code(404);
}
?>