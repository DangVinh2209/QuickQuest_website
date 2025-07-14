<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
session_start();
$title = 'Add Question';
if(isset($_POST['user_id']) && isset($_POST['problem']) && isset($_POST['module_id'])){
    addQuestion($pdo);
    $target_file='images/'.basename($_FILES['image_problem']['name']);
    move_uploaded_file($_FILES['image_problem']['tmp_name'],$target_file);
    header('location:index.php');
}
else{
    ob_start();
    $modules=listModule($pdo);
    $users=listUser($pdo);
    include 'templates/add.html.php';
    $output = ob_get_clean();
    $email=$_SESSION['email'];
}
include 'templates/layout.html.php';