<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
session_start();
$email=$_SESSION['email'];
$title='Edit Module';
if(isset($_POST['changed_module_name']) && $_POST['changed_module_name']!=$_POST['old_name']){
    $output='Successful!'.$_POST['changed_module_name'].' '.$_POST['old_name'].' '.$_POST['id'];
    changeModuleName($pdo,$_POST['changed_module_name'],$_POST['id']);
    header('location:module.php');
}

elseif (isset($_POST['changed_module_name']) && $_POST['changed_module_name']==$_POST['old_name']){
    $output='You have not changed module name !!!';
}

else{
ob_start();
    include 'templates/edit_module.html.php';
    $output=ob_get_clean();
}
include 'templates/admin_layout.html.php';