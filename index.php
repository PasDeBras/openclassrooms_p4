<?php
session_start();
try { 
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            require('controller/userOverviewController.php');
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                require('controller/userPostController.php');
                post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    require('controller/userPostController.php');
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Erreur : tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé');
            }
        }
        // ------------ Fonction flag comment ----------------
        elseif ($_GET['action'] == 'flagComment') {
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                if (isset($_GET['postId']) && $_GET['postId'] > 0) {
                    require('controller/userPostController.php');
                    addFlag($_GET['commentId'], $_GET['postId']);
                } else {
                    throw new Exception('Erreur : identifiant du billet non-renseigné !');
                }
            } else {
                throw new Exception('Erreur : identifiant du commentaire non-renseigné !');
            }
        }
        // ------------ Admin login ----------------
        elseif ($_GET['action'] == 'secure') {
            require('controller/secureController.php');
            adminAccess();
        }
        elseif ($_GET['action'] == 'disconnect') {
            require('controller/secureController.php');
            adminDisconnect();
        }
        elseif ($_GET['action'] == 'admin') {
            require('controller/adminOverviewController.php');
            $_SESSION['adminAccess'] = 'admin';
            adminOverview();
        }
        // ------------ Admin new post & edits ----------------
        elseif ($_GET['action'] == 'admin_NewPost') {
            if ($_SESSION['adminAccess'] == 'admin') {
                require('controller/adminPostEditorController.php');
                postEditor_New();
            } else {
                throw new Exception('Accès refusé.');
            }
        }
        elseif ($_GET['action'] == 'admin_SendNewPost') {
            if ($_SESSION['adminAccess'] == 'admin') {
                require('controller/adminPostEditorController.php');
                postEditor_SendNew($_POST['title'], $_POST['article']);
                adminOverview();
            } else {
                throw new Exception('Accès refusé.');
            }
        }
        elseif ($_GET['action'] == 'admin_EditPost') {
            if ($_SESSION['adminAccess'] == 'admin') {
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    require('controller/adminPostEditorController.php');
                    postEditor_Edit($_GET['id']);
                } else {
                    throw new Exception('Erreur : identifiant du billet non-renseigné !');
                }
            } else {
                throw new Exception('Accès refusé.');
            }
        }
        elseif ($_GET['action'] == 'admin_SendEditedPost') {
            if ($_SESSION['adminAccess'] == 'admin') {
                require('controller/adminPostEditorController.php');
                postEditor_SendEdited($_GET['id'], $_POST['title'], $_POST['article']);
                adminOverview();
            } else {
                throw new Exception('Accès refusé.');
            }
        }
    }
    else {
        require('controller/userOverviewController.php');
        listPosts();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}