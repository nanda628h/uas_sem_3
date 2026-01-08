<?php
class UserModel {
    private $db;
    public function __construct() {
        $this->db = Database::connect();
    }

    public function findUser($username) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username=?");
        $stmt->execute([$username]);
        return $stmt->fetch();
    }
}
