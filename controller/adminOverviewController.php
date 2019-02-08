<?php
require_once('model/PostManager.php');
function adminOverview() {
    $postManager = new OpenClassrooms\P4\Model\PostManager();
    $posts = $postManager->getPosts(); 
    require('view/backend/overView.php');
}
?>
