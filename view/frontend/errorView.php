<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>
    <h1>Erreur : </h1>
    <p><?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>