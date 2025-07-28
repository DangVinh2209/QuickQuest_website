<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
deleteModule($pdo,$_POST['id']);
header('location:module.php');