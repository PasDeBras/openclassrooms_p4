<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php?action=admin">Acceuil</a>/<a href="index.php?action=secure">Login</a></div>

<?php if (!isset($_POST['password']) OR $_POST['password'] != "admin")
{
?>
    <p id="password_notice">Veuillez entrer votre mot de passe pour acceder à cette partie du site :</p>
        <form action="index.php?action=secure" method="post">
            <p>
            <input type="password" name="password" />
            <input type="submit" value="submit" />
            </p>
        </form>
    <?php
}
else
{
    header('Location: index.php?action=admin');
}

?>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>