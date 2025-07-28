<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
$user_accounts=listUser($pdo);
foreach ($user_accounts as $user_account){
    if (password_verify($_POST['password'],$user_account['password'])  && $_POST['email']==$user_account['email']){
        session_start();
        $_SESSION['Authorised']='Y';
        break;
    }
}
if ($_SESSION['Authorised']=='Y'){
    $_SESSION['email']=$_POST['email'];
 
        header('location:index.php');
    
}
else{
    header('location:WrongPassword.php');
}
