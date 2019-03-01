<?php
session_start();
try {
    // ----------------------------------------------------------- User -----------------------------------------------------------
    // Navigation ---
    if (isset($_GET['action'])) { // Access user blog view with all posts
        if ($_GET['action'] == 'userOverview') {
            require('controller/userOverviewController.php');
            userOverview();
        }
        elseif ($_GET['action'] == 'userPostView') { // Access single post view w/ comments
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                require('controller/userPostController.php');
                post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        // Comments ---
        elseif ($_GET['action'] == 'addComment') { // Adds comment to ID'd blog post
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
        elseif ($_GET['action'] == 'flagComment') { // Flags comment for admin review
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
        elseif ($_GET['action'] == 'about') { // Access about view
            require('controller/userAboutController.php');
        }
        // ---------------------------------------------------------- ADMIN --------------------------------------------------------
        // Authentification ---
        elseif ($_GET['action'] == 'secure') { // Access login view 
            require('controller/secureController.php');
            secureView();
        }
        elseif ($_GET['action'] == 'passwordCheck') {
            require('controller/secureController.php');
            checkUser($_POST['login'], $_POST['password']);
            echo 'done';
        }
        elseif ($_GET['action'] == 'disconnect') { // Disconnect admin
            session_destroy();
            header('Location: index.php?');
        }
        elseif ($_GET['action'] == 'admin') { // Log in admin and access admin blog view w/ mod tools
            if ($_SESSION['user'] == 'admin') {
                require('controller/adminOverviewController.php');
                adminOverview();
            } else {
                throw new Exception('Identifiant ou mot de passe incorrect.');
            }
            
        }
        elseif ($_GET['action'] == 'adminPostView') { // Access admin post view w/ comments
            if ($_SESSION['user'] == 'admin') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    require('controller/adminPostController.php');
                    adminPost();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            } else {
                throw new Exception('Accès refusé.');
            } 
        }
        // Blog post editor ---
        elseif ($_GET['action'] == 'admin_NewPost') { // Access new post editor view
            if ($_SESSION['user'] == 'admin') {
                require('controller/adminNewPostController.php');
                postEditor_New();
            } else {
                throw new Exception('Accès refusé.');
            }
        }
        elseif ($_GET['action'] == 'admin_SendNewPost') { // Insert new post into db
            if ($_SESSION['user'] == 'admin') {
                require('controller/adminNewPostController.php');
                postEditor_SendNew($_POST['title'], $_POST['article']);
                adminOverview();
            } else {
                throw new Exception('Accès refusé.');
            }
        }
        elseif ($_GET['action'] == 'admin_EditPost') { // Access editor loaded with desired post to edit
            if ($_SESSION['user'] == 'admin') {
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
        elseif ($_GET['action'] == 'admin_SendEditedPost') { // Update edited post unto db
            if ($_SESSION['user'] == 'admin') {
                require('controller/adminPostEditorController.php');
                postEditor_SendEdited($_GET['id'], $_POST['title'], $_POST['article']);
                adminOverview();
            } else {
                throw new Exception('Accès refusé.');
            }
        }
        elseif ($_GET['action'] == 'admin_DeletePost') { // Delete post from db
            if ($_SESSION['user'] == 'admin') {
                require('controller/adminPostEditorController.php');
                postEditor_Delete($_GET['postId']);
            } else {
                throw new Exception('Accès refusé.');
            }
        }
        elseif ($_GET['action'] == 'admin_CommentModerator') { // Access moderation pending comments view
            if ($_SESSION['user'] == 'admin') {
                require('controller/commentModeratorController.php');
                listFlaggedComments();
            } else {
                throw new Exception('Accès refusé.');
            }
        }
        elseif ($_GET['action'] == 'deleteComment') { // Delete comment from db
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                if ($_SESSION['user'] == 'admin') {
                    require('controller/commentModeratorController.php');
                    commentDeletion($_GET['commentId']);
                } else {
                    throw new Exception('Accès refusé.');
                }
            } else {
                throw new Exception('ID non reconnu.');
            }
        }
        elseif ($_GET['action'] == 'unflagComment') { // Unflag Comment
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                if ($_SESSION['user'] == 'admin') {
                    require('controller/commentModeratorController.php');
                    commentUnflagging($_GET['commentId']);
                } else {
                    throw new Exception('Accès refusé.');
                } 
            }
        }
    }
    else {
        require('controller/userOverviewController.php');
        userOverview();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('controller/errorController.php');
}