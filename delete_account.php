<?php 
session_start();
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
if(isset($_POST['no'])){
    header('location:index.php');
}
elseif(isset($_POST['yes'])){
    $users=listUser($pdo);
    foreach($users as $user){
        if($user['email']==$_SESSION['email']){
            $user_id=$user['id'];
            break;
        }
    }
    try {
    deleteAccount($pdo, $user_id);
    header('location:login.html');
    } 
    catch (PDOException $e) {
        echo "Error deleting account: " . $e->getMessage();
    }

}
else{
    include 'templates/delete_account.html.php';
}
?>