<?php

// Chargement des classes
require_once('model/PostManager.php');

function userOverview()
{
    $postManager = new OpenClassrooms\P4\Model\PostManager(); 
    $posts = $postManager->getPosts(); 

    require('view/frontend/overView.php');
}