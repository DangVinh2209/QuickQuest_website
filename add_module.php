<?php
session_start();
$email=$_SESSION['email'];
$title='Add New module';
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
if (isset($_POST['new_module'])){
    addModule($pdo,$_POST['new_module']);
    header('location:module.php');
}
else{
    ob_start();
    include 'templates/add_module.html.php';
    $output=ob_get_clean();
}
include 'templates/admin_layout.html.php';