<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
session_start();
$email=$_SESSION['email'];
$title='Edit';
if(isset($_POST['new_name']) || isset($_POST['new_email'])){
    changeProfile($pdo,$_POST['new_name'],$_POST['new_email']);
    header('location:login.html');
}
else{
    ob_start();
    include 'templates/edit_profile.html.php';
    $output=ob_get_clean();
}
if ($_SESSION['email']=='admin@gmail.com'){
    include 'templates/admin_layout.html.php';
}
else{
    include 'templates/layout.html.php';
}