<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function adminPost()
{
    $postManager = new OpenClassrooms\P4\Model\PostManager();
    $commentManager = new OpenClassrooms\P4\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/backend/postView.php');
}

function addAdminComment($postId, $author, $comment)
{
    $commentManager = new OpenClassrooms\P4\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=userPostView&id=' . $postId);
    }
}
