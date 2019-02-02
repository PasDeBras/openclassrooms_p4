<?php
// Chargement des classes
require_once('model/PostManager.php');
function postEditor() {
    
    require('view/backend/postEditor.php');
}

function newPost($title, $article) {
    $postManager = new OpenClassrooms\P4\Model\PostManager();
    $affectedLines = $postManager->postPost($title, $article);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter l\'article !');
    }
    else {
        header('Location: index.php');
    }
}

