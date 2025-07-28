<?php
require 'check.php';
include 'database/dbFunctions.php';
$title='QuickQuest';
try{
    include 'database/dbConnection.php';
    $questions=listQuestion($pdo);
    $email=$_SESSION['email'];
    ob_start();
    include 'templates/home.html.php';
    $output=ob_get_clean();
    
}
catch(PDOException $e){
    $title='An error has occured';
    $output='Database error:'.$e->getMessage().' in '.$e->getFile().':'.$e->getLine();

}
if ($email=='admin@gmail.com'){
    include 'templates/admin_layout.html.php';
}
else{
    include 'templates/layout.html.php';
}