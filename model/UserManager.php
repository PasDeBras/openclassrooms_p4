<?php

namespace OpenClassrooms\P4\Model;

require_once('model/Manager.php');
class UserManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, username, pass WHERE username = :username');
        $req->execute(array(
            'username' => $login
        ));
        return $req;
    }
}
