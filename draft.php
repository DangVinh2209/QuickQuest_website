<?php
$enteredpassword='22092003';
$encryptedpassword=password_hash($enteredpassword,PASSWORD_DEFAULT);
echo $encryptedpassword;