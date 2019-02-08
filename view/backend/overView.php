<?php $title = 'Blog de Jean-Ecrivain'; ?>

<?php ob_start(); ?>
<h1>Blog</h1>
<p>Tout les posts :</p>


<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= htmlspecialchars_decode(nl2br(html_entity_decode($data['content']))) ?>
            <br />
            <em><a href="index.php?action=admin_EditPost&amp;id=<?= $data['id'] ?>">Editer</a></em>
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Comments</a></em> 
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>


<?php require('view/backend/adminTemplate.php'); ?>

