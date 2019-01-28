<?php $title = 'Admin overview PH'; ?>

<?php ob_start(); ?>
<?php

// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (!isset($_POST['password']) OR $_POST['password'] != "admin")
{
    // Afficher le formulaire de saisie du mot de passe
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
// Le mot de passe a été envoyé et il est bon
else
{
    // Afficher les codes secrets
    header('Location: index.php?action=admin');
}

?>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/adminTemplate.php'); ?>