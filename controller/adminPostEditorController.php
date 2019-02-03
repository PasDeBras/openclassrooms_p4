<?php
// Chargement des classes
require_once('model/PostManager.php');
function postEditor() {
    
    require('view/backend/postEditor.php');
}

function newPost($title, $article) {
    if (!empty($title) && !empty($article)) {
        $postManager = new OpenClassrooms\P4\Model\PostManager();
        $postManager->postPost($title, $article); 
        header('Location: index.php');
    } else {
        throw new Exception('Impossible d\'ajouter l\'article !');
    }
}

function editPost(){
    
}

