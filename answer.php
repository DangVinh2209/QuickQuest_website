<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
session_start();
$title = 'Answer';
$email=$_SESSION['email'];
$senders=listUser($pdo);
foreach ($senders as $sender){
    if ($sender['email']==$email){
        $sender_id=$sender['id'];
        break;
    }
}
if(isset($_POST['answer'])){
$_SESSION['question_id']=$_POST['question_id'];
$_SESSION['receiver_id']=$_POST['receiver_id'];
}
if(isset($_POST['submit'])){
    if (!empty($_FILES['photo-comment']['name'])){
        $target_file='images/'.basename($_FILES['photo-comment']['name']);
        move_uploaded_file($_FILES['photo-comment']['tmp_name'],$target_file);
        $file_name=$_FILES['photo-comment']['name'];
    }
    else {
        $file_name='NULL';
    }
    addAnswer($pdo,$_SESSION['question_id'],$_SESSION['receiver_id'],$_POST['comment'],$sender_id,$file_name);
    header('location:answer.php');
}
else{
    $comments=listComment($pdo,$_SESSION['question_id']);
    ob_start();
    include 'templates/answer.html.php';
    $output=ob_get_clean();
}

if ($_SESSION['email']=='admin@gmail.com'){
    include 'templates/admin_layout.html.php';
}
else{
    include 'templates/layout.html.php';
}
