<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once ('database.php');
$conn = dbConnect();
$site_settings_sql = "SELECT * FROM general_settings WHERE init = 1";
$stmt = $conn->prepare($site_settings_sql);
$stmt->execute();
$site_st = $stmt->fetch(PDO::FETCH_ASSOC);
$site_name = $site_st['site_name'];
$site_des = $site_st['site_description'];
$site_email = $site_st['site_email'];