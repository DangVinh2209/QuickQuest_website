<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
$title='Edit Module';
if(isset($_POST['changed_module_name']) && $_POST['changed_module_name']!=$_POST['old_name']){
    $output='Successful!'.$_POST['changed_module_name'].' '.$_POST['old_name'].' '.$_POST['id'];
    changeModuleName($pdo,$_POST['changed_module_name'],$_POST['id']);
    header('location:admin.php');
}

elseif (isset($_POST['changed_module_name']) && $_POST['changed_module_name']==$_POST['old_name']){
    $output='You have not changed module name !!!';
}

else{
ob_start();
    include 'templates/edit_module.html.php';
    $output=ob_get_clean();
}
include 'templates/layout.html.php';