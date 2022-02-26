<?php
echo 'подключен конфиг';echo '<br>';
/*
$main_url = 'http://localhost/todo3/' ;
$url_full = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url_full;echo '<br>';
$url_main = parse_url($url_full);
echo '<pre>';
var_dump($url_main); echo '<br>';
$url_main = $url_main['scheme'];
echo '<br>';
echo explode('/', $_SERVER['REQUEST_URI'])[1];
*/

$main_url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].'/'  . explode('/', $_SERVER['REQUEST_URI'])[1] . '/';
echo $main_url;
echo '<br>';
echo $_SERVER['REQUEST_URI'];
?>