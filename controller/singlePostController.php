<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function post()
{
    $postManager = new OpenClassrooms\P4\Model\PostManager();
    $commentManager = new OpenClassrooms\P4\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new OpenClassrooms\P4\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

// ------------ Fonction flag comment ----------------
// function addFlag($commentId, $postId, $isFlagged)
// {
//     $commentManager = new OpenClassrooms\P4\Model\CommentManager();
//     $commentManager->flagComment($postId, $isFlagged);
//     header('Location: index.php?action=post&id=' . $postId . '&flagged=' . $commentId);
    
// }