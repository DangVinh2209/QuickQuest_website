<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
$user_accounts=listUser($pdo);
foreach ($user_accounts as $user_account){
    if ($_POST['password']==$user_account['password'] && $_POST['email']==$user_account['email']){
        session_start();
        $_SESSION['Authorised']='Y';
        break;
    }
}
if ($_SESSION['Authorised']=='Y'){
    $_SESSION['email']=$_POST['email'];
    if($_POST['email']=='vinhdang123@gmail.com'){
        header('location:admin.php');
    }
    else{
        header('location:index.php');
    }
}
else{
    header('location:WrongPassword.php');
}
// if ($_POST['password']==$ActualPassword){
//     session_start();
//     $_SESSION['Authorised']='Y';
//     header('location:index.php');
// }
// else{
//     header('location:WrongPassword.php');
// }