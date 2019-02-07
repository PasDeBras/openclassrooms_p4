<?php $title = 'Admin editor PH'; ?>

<?php ob_start(); ?>

<form action="index.php?action=addPost" method="post">
    <div>
        <label for="title">Title :</label><br />
        <input type= "text" id="editable_title" name="title"/> <?php//$originalTitle;?>
    </div>
    <div>
        <label for="article">Article</label><br />
        <textarea id="editable_body" name="article"><?php $originalArticle; ?></textarea>
    </div>
</form>


<?php $content = ob_get_clean(); ?>

<?php require('view/backend/adminTemplate.php'); ?>