<?php $title = 'Moderation'; ?>

<?php ob_start(); ?>
<h1>Commentaires en attente de modération</h1>
<p>Ces commentaires ont été signalés par vos lecteurs, ils sont classés du plus grand nombre de signalements au plus petit.</p>
<?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p>Utilisateur : <strong><?= htmlspecialchars($comment['author']) ?></strong> à posté le <?= $comment['comment_date_fr'] ?> :</p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <p>Ce commentaire à été signalé <?= $comment['flagged'] ?> fois,</p>
            <p><a href="index.php?action=deleteComment&amp;commentId=<?= $comment['id'] ?>">supprimer ce commentaire</a> ou <a href="index.php?action=unflagComment&amp;commentId=<?= $comment['id'] ?>">unflag ce commentaire</a></p>
        <?php
        }
        ?>
        

<?php $content = ob_get_clean(); ?>


<?php require('view/backend/adminTemplate.php'); ?>
