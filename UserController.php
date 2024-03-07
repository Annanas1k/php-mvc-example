<?php

require_once 'UserModel.php';

class UserController {
    public function greetUser() {
        $userModel = new UserModel();
        $userName = $userModel->getUser();
        require_once 'user_view.php';
    }
}

