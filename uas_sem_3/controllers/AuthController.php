<?php
require 'models/UserModel.php';

class AuthController {
    public function login() {
        if ($_POST) {
            $user = (new UserModel)->findUser($_POST['username']);
            if ($user && password_verify($_POST['password'],$user['password'])) {
                $_SESSION['user'] = $user;
                header("Location: buku");
                exit;
            }
            $error = "Username / Password salah";
        }
        require 'views/auth/login.php';
    }

    public function logout() {
        session_destroy();
        header("Location: login");
    }
}
