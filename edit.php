<?php
session_start();
$email=$_SESSION['email'];
$title='Edit';

if(isset($_POST['changed_question']) && $_POST['changed_question']!=$_POST['question']){
    include 'database/dbConnection.php';
    include 'database/dbFunctions.php';
    changeQuestion($pdo,$_POST['changed_question'],$_POST['id']);
    header('location:index.php');
}
elseif(isset($_POST['changed_question']) && $_POST['changed_question']==$_POST['question']){
    $output='You have not changed question';
}
else{
    ob_start();
    include 'templates/edit.html.php';
    $output=ob_get_clean();
}
include 'templates/layout.html.php';