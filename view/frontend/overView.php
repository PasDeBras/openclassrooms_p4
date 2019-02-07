<?php $title = 'PAGE TITLE PH'; ?>

<?php ob_start(); ?>
<h1>Title</h1>
<p>something something</p>


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
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Comments</a></em> 
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>