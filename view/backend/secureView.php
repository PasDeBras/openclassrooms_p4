<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>
<?php

if (!isset($_POST['password']) OR $_POST['password'] != "admin")
{
    ?>
    <p>Veuillez entrer votre mot de passe pour acceder à cette partie du site :</p>
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