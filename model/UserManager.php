<?php

namespace OpenClassrooms\P4\Model;

require_once('model/Manager.php');
class UserManager extends Manager
{
    public function getUser($login)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, username, pass FROM users WHERE username = ?');
        $req->execute(array($login));
        return $req;
    }
}
