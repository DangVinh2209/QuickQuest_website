<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
$title='Qmess';
session_start();
$email=$_SESSION['email'];
$users=listUser($pdo);
if(isset($_POST['user_clicked'])){
    $_SESSION['conversation_code']=$_POST['receiver_id'].'-A';
    $_SESSION['receiver_name']=$_POST['receiver_name'];
    header('location:qmess.php');
}
else{
    ob_start();
    include 'templates/admin_qmess.html.php';
    $output=ob_get_clean();
}
include 'templates/admin_layout.html.php';