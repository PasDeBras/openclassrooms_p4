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

    // ------------ Fonction flag comment ----------------
    // public function flagCheck($commentId)
    // {
    //     $db = $this->dbConnect();
    //     $req = $db->prepare('SELECT flag FROM comments WHERE id = ?');
    //     $isFlagged = $req->execute(array($commentId));

    //     return $isFlagged;
    // }

    // public function flagComment($postId, $isFlagged)
    // {
    //     $db = $this->dbConnect();
    //     if ($isFlagged === true) {
    //         $flag = $db->prepare('UPDATE comments SET flagged = flagged + 1 WHERE ID = ?');
    //         $flagged = $flag->execute(array($postId));

    //     } else {
    //         $flag = $db->prepare('UPDATE comments SET flag = 1, flagged = flagged + 1 WHERE ID = ?');
    //         $flagged = $flag->execute(array($postId));

    //     }
    //     return $flagged;
    // }

}