<?php $title = 'Nouveau chapitre - forteroche.fr'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php?action=admin">Acceuil (Admin)</a>/Editeur</div>

<form action="index.php?action=admin_SendNewPost" method="post">
    <div>
        <label for="title">Titre de l'article :</label><br />
        <input type= "text" id="editable_title" name="title"/>
    </div>
    <div>
        <label for="article">Article :</label><br />
        <textarea id="editable_body" name="article"></textarea>
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/adminTemplate.php'); ?>

