<?php $title = 'Moderation'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php?action=admin">Acceuil (Admin)</a>/Moderateur</div>
<h1>Commentaires en attente de modération</h1>
<p>Ces commentaires ont été signalés par vos lecteurs, ils sont classés du plus grand nombre de signalements au plus petit.</p>
<table style="width:100%">
    <tr>
        <th>ID</th>
        <th>Auteur</th> 
        <th>Commentaire</th>
        <th>Nbre de signalements</th>
        <th>Suppression</th>
        <th>Deflag</th>
    </tr>
    <?php 
    while ($comment = $comments->fetch())
    {
        ?>
        <tr>
            <th><?= $comment['id'] ?></th>
            <th><?= htmlspecialchars($comment['author']) ?></th> 
            <th><?= nl2br(htmlspecialchars($comment['comment'])) ?></th>
            <th><?= $comment['flagged'] ?></th>
            <th><a href="index.php?action=deleteComment&amp;commentId=<?= $comment['id'] ?>">supprimer ce commentaire</a></th>
            <th><a href="index.php?action=unflagComment&amp;commentId=<?= $comment['id'] ?>">valider ce commentaire</a></th>
        </tr>
        <?php
    }
    ?>
</table>        
        

<?php $content = ob_get_clean(); ?>


<?php require('view/backend/adminTemplate.php'); ?>
