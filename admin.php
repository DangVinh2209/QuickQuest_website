<?php
$title='Admin';
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
$admin_modules=listModule($pdo);
ob_start();
include 'templates/admin.html.php';
$output=ob_get_clean();
include 'templates/admin_layout.html.php';