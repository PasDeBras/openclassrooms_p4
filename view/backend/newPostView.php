<?php $title = 'Admin NEW POST PH'; ?>

<?php ob_start(); ?>

<form action="index.php?action=admin_SendNewPost" method="post">
    <div>
        <label for="title">Title :</label><br />
        <input type= "text" id="editable_title" name="title"/>
    </div>
    <div>
        <label for="article">Article</label><br />
        <textarea id="editable_body" name="article"></textarea>
    </div>
</form>



<?php $content = ob_get_clean(); ?>


<?php require('view/backend/adminTemplate.php'); ?>

