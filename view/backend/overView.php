<?php $title = 'Billet simple pour l\'Alaska - forteroche.fr'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php?action=admin">Acceuil (Admin)</a>/</div>

<h1 id="website_mainTitle">Billet simple pour l'Alaska</h1>
<h2 id="website_subTitle">Un roman épisodique par Jean Forteroche, un nouveau chapitre disponible ici, tout les vendredis :</h2>

<?php while ($data = $posts->fetch())
{
?>
    <div class="book_chapterDiv">
        <h3 class="book_chapterDiv_Title">
            <a href="index.php?action=adminPostView&amp;id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <div class="book_chapterDiv_Content">
            <?= htmlspecialchars_decode(nl2br(html_entity_decode($data['content']))) ?>
            <br />
            <p class="book_chapterDiv_Content_Comments">
            <em><a href="index.php?action=admin_EditPost&amp;id=<?= $data['id'] ?>">Editer</a></em>
            <em><a href="index.php?action=adminPostView&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
            </p> 
        </div>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/backend/adminTemplate.php'); ?>

