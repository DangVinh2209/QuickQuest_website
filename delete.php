<?php
include 'database/dbConnection.php';
include 'database/dbFunctions.php';
deleteQuestion($pdo,$_POST['id']);
header('location:index.php');
include 'templates/layout.html.php';