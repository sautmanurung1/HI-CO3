<?php

class database
{ 
    private $db;
    // koneksi db
    public function __construct() {
        $this->db = mysqli_connect("localhost", "root", "", "db_hico3");
        if ($this->db-> connect_error) {
            echo "Failed to connect to MySQL: " . $this->db-> connect_error;
            exit();
        }
    }

    function login($username, $password){
        $res = $this->db->query("SELECT * FROM users WHERE username = '$username'")->fetch_assoc();
        if (password_verify($password, $res['password'])) {
            return $res;
        }else{
            return false;
        }
    }

    function register($name, $username, $email, $password){
        return $this->db->query("INSERT INTO users(email, password, name, username) VALUES('$email', '$password', '$name', '$username')"); 
    }
}