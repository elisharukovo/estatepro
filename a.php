<?php 
$password="admin";
echo $hashed_pwd = password_hash($password,PASSWORD_BCRYPT);
?>