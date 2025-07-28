<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
session_start();
$email=$_SESSION['email'];
$title='Profile';
$users=listUser($pdo);
foreach($users as $user){
    if ($user['email']==$_SESSION['email']){
        $name=$user['name'];
        $email=$user['email'];
        $avatar=$user['avatar'];
    }
}
ob_start();
include 'templates/profile.html.php';
$output=ob_get_clean();
if ($_SESSION['email']=='admin@gmail.com'){
    include 'templates/admin_layout.html.php';
}
else{
    include 'templates/layout.html.php';
}