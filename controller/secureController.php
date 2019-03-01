<?php

// Chargement des classes
require_once('model/UserManager.php');
function secureView() {
    require('view/backend/secureView.php');
}
function secureView_Refused() {
    require('view/backend/secureView.php?context=refused');
}
function checkUser($enteredLogin, $enteredPassword){
    $userManager = new OpenClassrooms\P4\Model\UserManager();
    $user = $userManager->getUser($enteredLogin);
    $userCheck = $user->fetch();
    
    $passwordCheck = password_verify($enteredPassword, $userCheck['pass']);

    if (!$userCheck) {
        header('Location: index.php?action=admin');
    } else {
        if ($passwordCheck) {
            session_start();
            $_SESSION['id'] = $userCheck['id'];
            $_SESSION['user'] = $userCheck['username'];
            header('Location: index.php?action=admin');
        }
        else {
            header('Location: index.php?action=admin');
        }
    }
};

?>
