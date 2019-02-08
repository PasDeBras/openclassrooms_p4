<?php $title = 'Blog de Jean-Ecrivain'; ?>

<?php ob_start(); ?>
        <h1>Article</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h2>
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= $post['creation_date_fr'] ?></em>
            </h2>
            
            <p>
                <?= htmlspecialchars_decode(nl2br(html_entity_decode($post['content']))) ?>
            </p>
        </div>

        <div class="comments">
        <h3>Comments</h3>

        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>
        
        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <?php
            if (isset($_GET['flagged']) && ($_GET['flagged'] > 0) && ($_GET['flagged'] == $comment['id'])) {
                ?>
                <p>Merci d'avoir signalé ce commentaire !</p>
                <?php
            } else {
                ?>
                <p><a href="index.php?action=flagComment&amp;commentId=<?= $comment['id'] ?>&amp;postId=<?= $post['id'] ?>">signaler ce commentaire</a></p>
                <?php
            }

        }
        ?>
        </div>
    </body>
</html>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>