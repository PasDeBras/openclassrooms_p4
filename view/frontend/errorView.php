<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php">Acceuil</a>/Erreur</div>

<h1 id="errorPage_Title">Erreur : </h1>
<p><?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>