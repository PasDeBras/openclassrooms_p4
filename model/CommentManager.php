<?php

namespace OpenClassrooms\P4\Model;

require_once('model/Manager.php');
class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function deleteComment($commentId)
    {
        $db = $this->dbConnect();

        $comment = $db->prepare('DELETE FROM `comments` WHERE `id` = ?');
        $deleteComment = $comment->execute(array($commentId));

        
        return $deleteComment;
    }

    public function flagComment($commentId)
    {
        $db = $this->dbConnect();

        $flag = $db->prepare('UPDATE comments SET flagged = flagged + 1 WHERE ID = ?');
        $flagged = $flag->execute(array($commentId));

        
        return $flagged;
    }

    public function unflagComment($commentId)
    {
        $db = $this->dbConnect();

        $unflag = $db->prepare('UPDATE comments SET flagged = 0 WHERE ID = ?');
        $unflagged = $unflag->execute(array($commentId));

        
        return $unflagged;
    }

    public function getFlaggedComments()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, flagged, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE flagged > 0 ORDER BY flagged DESC');

        return $req;
    }

}