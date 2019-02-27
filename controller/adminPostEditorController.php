<?php
// Chargement des classes
require_once('model/PostManager.php');
function postEditor_Edit($id){
    $postManager = new OpenClassrooms\P4\Model\PostManager();
    $post = $postManager->getPost($id);

    require('view/backend/postEditorView.php');
}

function postEditor_SendEdited($postId, $postTitle, $postBody) {
    if (!empty($postId) && !empty($postTitle) && !empty($postBody)) {
        $postManager = new OpenClassrooms\P4\Model\PostManager();
        $postManager->replacePost($postId, $postTitle, $postBody); 
        header('Location: index.php?action=admin');
    } else {
        throw new Exception('Impossible de mettre à jour l\'article !');
    }
}

function postEditor_Delete($postId) {
    $postManager = new OpenClassrooms\P4\Model\PostManager();
    $postManager->deletePost($postId);

    header('Location: index.php?action=admin');
}

