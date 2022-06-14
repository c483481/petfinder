<?php
class Auth_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    function jum($email)
    {
        $this->db->query("SELECT * FROM user where email='$email'");
        $this->db->bind('email', htmlspecialchars($email));
        $this->db->execute();
        return $this->db->rowCount();
    }
    function cek($email)
    {
        $this->db->query("SELECT * FROM user where email=:email");
        $this->db->bind('email', htmlspecialchars($email));
        return $this->db->single();
    }
    function daftar($data)
    {
        $username = htmlspecialchars($data["username"]);
        $email = $data["email"];
        $password = htmlspecialchars($data["password"]);
        $rePass = htmlspecialchars($data["retypePass"]);
        if ($this->jum($email) > 0) {
            return false;
        }
        if ($password !== $rePass) {
            return false;
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->db->query("INSERT INTO `user` (`id`, `username`, `email`, `password`, `stat`) 
        VALUES (NULL, :username, :email ,:password, '1')");
        $this->db->bind('username', $username);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
