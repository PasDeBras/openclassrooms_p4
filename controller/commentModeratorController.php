<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listFlaggedComments()
{
    $commentManager = new OpenClassrooms\P4\Model\CommentManager();
    $comments = $commentManager->getFlaggedComments();

    require('view/backend/commentModeratorView.php');
}

function commentDeletion($commentId) {
    $commentManager = new OpenClassrooms\P4\Model\CommentManager();
    $commentManager->deleteComment($commentId);

    header('Location: index.php?action=admin_CommentModerator');
}

function commentUnflagging($commentId) {
    $commentManager = new OpenClassrooms\P4\Model\CommentManager();
    $commentManager->unflagComment($commentId);

    header('Location: index.php?action=admin_CommentModerator');
}