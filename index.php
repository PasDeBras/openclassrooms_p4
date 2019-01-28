<?php

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            require('controller/allPostsController.php');
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                require('controller/singlePostController.php');
                post();
            }
            else {
                // Erreur donc exception, envoyée au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    require('controller/singlePostController.php');
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    // Autre erreur
                    throw new Exception('Erreur : tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre erreur
                throw new Exception('Erreur : aucun identifiant de billet envoyé');
            }
        }
        // ------------ Fonction flag comment ----------------
        elseif ($_GET['action'] == 'flagComment') {
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                if (isset($_GET['postId']) && $_GET['postId'] > 0) {
                    require('controller/singlePostController.php');
                    addFlag($_GET['commentId'], $_GET['postId']);
                } else {
                    throw new Exception('Erreur : identifiant du billet non-renseigné !');
                }
            } else {
                throw new Exception('Erreur : identifiant du commentaire non-renseigné !');
            }
        }
    }
    else {
        require('controller/allPostsController.php');
        listPosts();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}