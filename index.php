<?php
const rootDir = '/home/multistream6/domains/fnbamerica.com/public_html';
require_once rootDir . '/config/config.php';
require_once rootDir . '/includes/functions/general_functions.php';
echo $site_name;

//simple router
$cur_url = $_SERVER['REQUEST_URI'];
if ($cur_url == '/http://fnbamerica.com/') { // Fix the comparison condition
    require_once rootDir . '/home.php'; // Add slash before 'home.php'
} else {
    $cur_url = substr($cur_url, 1);
    $cur_url = explode('/', $cur_url);

    // Since $cur_url is an array, use $cur_url[1] to access the first segment
    switch ($cur_url[1]) {
        case 'about':
            require_once rootDir . '/about.php'; // Add slash before 'about.php'
            break;
        default:
            require_once rootDir . '/includes/pages/home.php'; // Add slash before 'includes/pages/home.php'
    }
}

