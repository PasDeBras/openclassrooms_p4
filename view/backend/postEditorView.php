<?php $title = 'Editeur de post'; ?>

<?php ob_start(); ?>

<form action="index.php?action=admin_SendEditedPost&amp;id=<?=$post['id']?>" method="post">
    <div>
        <label for="title">Title :</label><br />
        <input type= "text" id="editable_title" name="title" placeholder="<?= $post['title']?>"/><!-- Marche -->
    </div>
    <div>
        <label for="article">Article</label><br />
        <textarea id="editable_body" name="article"><?= $post['content']?></textarea>
    </div>
</form>



<?php $content = ob_get_clean(); ?>


<?php require('view/backend/adminTemplate.php'); ?>