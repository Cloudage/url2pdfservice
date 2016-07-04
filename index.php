<?php

$url = $_GET['url'];
if(!is_string($url)) die();
$url = str_replace(array(';',' '),'',$url);
echo $url;

$filename = '/tmp/'.md5($url).'.pdf';
if(file_exists($filename)){
    header("Content-Type: application/pdf");
    echo file_get_contents($filename);
}else {
    putenv('LANG=zh_CN.UTF-8');
    exec("xvfb-run -a -s \"-screen 0 640x480x16\" wkhtmltopdf $url $filename");

    if(file_exists($filename)){
        header("Content-Type: application/pdf");
        echo file_get_contents($filename);
    }else{
        header("HTTP/1.0 404 Not Found");
    }    
}

?>