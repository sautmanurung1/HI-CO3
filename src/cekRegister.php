<?php

require_once "db.php";

if (isset($_POST['email'])) {
    $db = new database();
    $register = $db->register($_POST['name'],$_POST['username'],$_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT));
    if ($register) {
        header("Location: login.php", true);
        exit();
    }else{
        echo "Register failed!";
    }
}