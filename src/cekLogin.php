<?php

require_once "db.php";
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $db = new database();
    $login = $db->login($_POST['username'], $_POST['password']);
    if ($login) {
        $_SESSION["user"] = $login;
        header("Location: ../", true);
        exit();
    }else{
        echo "Register failed!";
    }
}