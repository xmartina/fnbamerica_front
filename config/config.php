<?php
dbConnect();
$site_settings_sql = "SELECT * FROM general_settings WHERE init = 1";
$stmt = $conn->prepare($site_settings_sql);
$stmt->execute();
$site_st = $stmt->fetch(PDO::FETCH_ASSOC);
$site_name = $site_st['site_name'];