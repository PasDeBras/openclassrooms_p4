<?php $title = 'Moderation'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php?action=admin">Acceuil (Admin)</a>/Moderateur</div>

<h1 id="commentModerator_Title">Commentaires en attente de modération</h1>
<p id="commentModerator_Notice">Ces commentaires ont été signalés par vos lecteurs, ils sont classés du plus grand nombre de signalements au plus petit.</p>
<div id="table_container">
    <table id="commentModerator_Table" style="width:100%">
            <tr id="commentModerator_Table_Labels">
                <th>POST</th>    
                <th>ID</th>
                <th>AUTEUR</th> 
                <th>COMMENTAIRE</th>
                <th>SIGNALEMENTS</th>
                <th>SUPPRESSION</th>
                <th>VALIDATION</th>
            </tr>
            <?php 
            while ($comment = $comments->fetch())
            {
                ?>
                <tr class="commentModerator_Table_Items">
                    <td class="commentModerator_Table_Items_Post"><a href="index.php?action=adminPostView&amp;id=<?= $comment['post_id'] ?>" title="Se rendre sur la page du chapitre concerné">Chapitre</a></th>
                    <td class="commentModerator_Table_Items_Id"><?= $comment['id'] ?></th>
                    <td class="commentModerator_Table_Items_Author"><?= htmlspecialchars($comment['author']) ?></th> 
                    <td class="commentModerator_Table_Items_Comment"><?= nl2br(htmlspecialchars($comment['comment'])) ?></th>
                    <td class="commentModerator_Table_Items_Flagged"><?= $comment['flagged'] ?></th>
                    <td class="commentModerator_Table_Items_Delete"><a href="index.php?action=deleteComment&amp;commentId=<?= $comment['id'] ?>" title="Supprimer ce commentaire">Supprimer</a></th>
                    <td class="commentModerator_Table_Items_UnFlag"><a href="index.php?action=unflagComment&amp;commentId=<?= $comment['id'] ?>" title="Valider ce commentaire">Valider</a></th>
                </tr>
                <?php
            }
            ?>
    </table>
</div>
<div id="commentModerator_help">
    <h2>Aide :</h2>    
    <p>
        <b>Post :</b> Redirige vers le chapitre concerné.<br>
        <b>ID :</b> Identifiant unique du commentaire.<br>
        <b>Auteur :</b> Pseudonyme de l'utilisateur ayant laissé le commentaire.<br>
        <b>Commentaire :</b> Commentaire ayant été signalé par d'autres utilisateurs pour moderation.<br>
        <b>Signalements :</b> Nombre de fois que ce commentaire à été signalé.<br>
        <b>Suppression :</b> Suppression definitive du commentaire.<br>
        <b>Validation :</b> Remise à zero du nombre de signalement pour ce commentaire.
    </p>
</div>    
        
<?php $content = ob_get_clean(); ?>

<?php require('view/backend/adminTemplate.php'); ?>
