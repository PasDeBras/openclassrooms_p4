<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php?">Acceuil</a>/<a href="index.php?action=secure">Login</a></div>

<div id="secure">
    <p id="password_notice">Veuillez entrer votre mot de passe pour acceder à cette partie du site :</p>
        <form action="index.php?action=passwordCheck" method="post">
            <p>
            Login :
            <input type="text" name="login" />
            Mot de passe :
            <input type="password" name="password" />
            <input type="submit" value="valider" />
            </p>
        </form>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>