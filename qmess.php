<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
session_start();
$email=$_SESSION['email'];
$title='Qmess';

$senders=listUser($pdo);
foreach($senders as $sender){
    if($sender['email']==$_SESSION['email']){
        $sender_id=$sender['id'];
        if($_SESSION['email']=='admin@gmail.com'){
            $conversation_code=$_SESSION['conversation_code'];
            $receiver_name=$_SESSION['receiver_name'];
            $sender_name='admin';
        }
        else{
            $conversation_code=$sender_id.'-A';
            $receiver_name='Admin';
            $sender_name=$sender['name'];
        }
        break;
    }
}

if(isset($_POST['submit'])){
    addMessage($pdo,$_POST['message'],$sender_id,$conversation_code);
    header('location:qmess.php');
}
else{
    $messages=showMessage($pdo,$conversation_code);
    ob_start();
    include 'templates/qmess.html.php';
    $output=ob_get_clean();
}
include 'templates/layout.html.php';