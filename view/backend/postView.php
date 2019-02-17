<?php $title = (htmlspecialchars($post['title']) . 'Billet simple pour l\'Alaska - forteroche.fr'); ?>

<?php ob_start(); ?>

<div id="breadcrumbs"><a href="index.php">Acceuil</a>/<a href="index.php">Articles</a>/<?= htmlspecialchars($post['title']) ?></div>

<h1 id="website_mainTitle">Billet simple pour l'Alaska</h1>
<h2 id="website_subTitle">Un roman épisodique par Jean Forteroche, un nouveau chapitre disponible ici, tout les vendredis :</h2>
        
<p><a href="index.php?action=admin">Retour à la liste des billets</a></p>

<div id="book_chapterDiv">
    <h3 id="book_chapterDiv_Title">
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>
    <p><a href="index.php?action=admin_EditPost&amp;id=<?= $post['id'] ?>">Editer ce chapitre</a></p>
            
    <div id="book_chapterDiv_Content">
        <?= htmlspecialchars_decode(nl2br(html_entity_decode($post['content']))) ?>
    </div>
</div>

<div id="book_chapterCommentsDiv">
    <h3 id="book_chapterCommentsDiv_Title">Commentaires :</h3>

    <div id="book_chapterCommentsDiv_Comments">
        <?php 
        while ($comment = $comments->fetch())
        {?>
            <div class="book_chapterCommentsDiv_Comments_Comment">
                <p class="commentAuthor"><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
                <p class="comment"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                
                <?php
                if (isset($_GET['flagged']) && ($_GET['flagged'] > 0) && ($_GET['flagged'] == $comment['id']))
                { ?>
                 <p class="commentFlagged">Merci d'avoir signalé ce commentaire !</p>
                <?php
                } 
                else
                { ?>
                    <p class="commentAddFlag"><a href="index.php?action=flagComment&amp;commentId=<?= $comment['id'] ?>&amp;postId=<?= $post['id'] ?>">Signaler ce commentaire</a></p>
                <?php } ?>
                </div>
                <?php } ?>
            
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/adminTemplate.php'); ?>