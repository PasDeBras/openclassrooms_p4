<?php

namespace OpenClassrooms\P4\Model;

require_once('model/Manager.php');
class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function uploadPost($postTitle, $postBody)
    {
        $db = $this->dbConnect();
        $posts = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())');
        $executeRequest = $posts->execute(array($postTitle, $postBody));

        return $executeRequest;
    }

    public function replacePost($postId, $postTitle, $postBody)
    {
        $db = $this->dbConnect();
        $posts = $db->prepare('UPDATE posts SET title = :newtitle, content = :newcontent WHERE id = :id');
        $executeRequest = $posts->execute(array(
            'newtitle' => $postTitle,
            'newcontent' => $postBody,
            'id' => $postId
        ));

        return $executeRequest;
    }

    public function deletePost($postId)
    {
        $db = $this->dbConnect();

        $post = $db->prepare('DELETE FROM `posts` WHERE `id` = ?');
        $deletePost = $post->execute(array($postId));

        
        return $deletePost;
    }
}
