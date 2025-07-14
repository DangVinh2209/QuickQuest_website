<?php
require 'check.php';
include 'database/dbFunctions.php';
$title='QuickQuest';
try{
    include 'database/dbConnection.php';
    $questions=listQuestion($pdo);
    ob_start();
    include 'templates/home.html.php';
    $output=ob_get_clean();
    $email=$_SESSION['email'];
}
catch(PDOException $e){
    $title='An error has occured';
    $output='Database error:'.$e->getMessage().' in '.$e->getFile().':'.$e->getLine();

}
include 'templates/layout.html.php';