<?php
const rootDir = '/home/multistream6/domains/fnbamerica.com/public_html';
require_once rootDir . '/config/config.php';
require_once rootDir . '/includes/functions/general_functions.php';
echo $site_name;

//simple router
$cur_url = $_SERVER['REQUEST_URI'];
if ($cur_url == 'http://fnbamerica.com/') {
    require_once rootDir . 'home.php';
} else {
    $cur_url = substr($cur_url, 1);
    $cur_url = explode('/', $cur_url);

    switch ($cur_url) {
        case 'about':
            require_once rootDir . 'about.php';
            break;
        default:
            require_once __DIR__ . '/includes/pages/home.php';
    }
}