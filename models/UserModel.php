<?php
include './Database.php';

class UserModel{
    private $id;
    private $fullName;
    private $phoneNumber;
    private $login;
    private $password;
    private $role;
    private $userService;
    private $userCard;
    private $db = (new Database())->getConnection();

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }
}