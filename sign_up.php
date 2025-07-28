<?php

include 'database/dbConnection.php';
include 'database/dbFunctions.php';
if(isset($_POST['submit'])){

    $name_exist='N';
    $gmail_exist='N';
    $user_accounts=listUser($pdo);
    foreach($user_accounts as $user_account){
        if ($_POST['name']==$user_account['name']){
            $name_exist='Y';
            break;
        }
    }
    foreach($user_accounts as $user_account){
        if($_POST['email']==$user_account['email']){
            $gmail_exist='Y';
            break;
        }
    }

    if($name_exist=='Y'){
        $output= 'your name is already exist';
    }
    elseif($gmail_exist=='Y'){
        $output='your email is already exist';
    }
    elseif($_POST['password']!=$_POST['confirm_password']){
        $output='confirm password is failed';
    }
    else{
        $output='Created Successfully';
        $encryptedPassword=password_hash($_POST['password'],PASSWORD_DEFAULT);
        createAccount($pdo,$_POST['name'],$_POST['email'],$encryptedPassword);
    }
    include 'templates/sign_up.html.php';
}
else{
    include 'templates/sign_up.html.php';
}