<?php
require('controller/frontend.php');

try { // On essaie de faire des choses
    listPosts();
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}