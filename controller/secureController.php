<?php

function adminAccess() {
    require('view/backend/secureView.php');
}

function adminDisconnect(){
    session_destroy();
    header('Location: index.php?');
}