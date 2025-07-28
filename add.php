<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
session_start();
$title = 'Add Question';
if(isset($_POST['problem']) && isset($_POST['module_id'])){
    $users=listUser($pdo);
    foreach($users as $user){
        if($user['email']==$_SESSION['email']){
            $user_id=$user['id'];
        }
    }
    addQuestion($pdo,$user_id);
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
if ($_SESSION['email']=='admin@gmail.com'){
    include 'templates/admin_layout.html.php';
}
else{
    include 'templates/layout.html.php';
}
