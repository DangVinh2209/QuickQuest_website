<?php
session_start();
if ($_SESSION['Authorised']!='Y'){
    header('location:Notauthorised.php');
}
?>