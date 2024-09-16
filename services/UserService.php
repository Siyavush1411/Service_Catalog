<?php 
include './models/UserModel.php';

class UserService{

    private $user = new UserModel();
    public function get_user_by_id($phoneNumber) : void {

        $svar = $this->user->db->prepare('select * from users where number = :phoneNumber');
        $svar->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
        $svar->execute();
        $result = $svar->fetchAll(PDO::FETCH_ASSOC);
    }


    public function register_user($fullName, $phoneNumber, $login, $password) {

        $passwordSalt = $password . hash('sha256', $password);
        $hashedPassword = hash('sha256', $passwordSalt);

        $stmt = $this->user->db->prepare('INSERT INTO users (fullName, phoneNumber, login, hashedPassword) VALUES (:fullName, :phoneNumber, :login, :password)');
        $stmt->bindParam(':fullName', $fullName);
        $stmt->bindParam(':phoneNumber', $phoneNumber);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
    }
}

?>