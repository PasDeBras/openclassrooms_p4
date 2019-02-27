<?php
// Chargement des classes
require_once('model/PostManager.php');
function postEditor_New() {
    require('view/backend/newPostView.php');
}
function postEditor_SendNew($title, $article) {
    if (!empty($title) && !empty($article)) {
        $postManager = new OpenClassrooms\P4\Model\PostManager();
        $postManager->uploadPost($title, $article); 
        header('Location: index.php?action=admin');
    } else {
        throw new Exception('Impossible d\'ajouter l\'article !');
    }
}