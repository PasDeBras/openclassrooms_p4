<?php

namespace OpenClassrooms\P4\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=project_oc_p4;charset=utf8', 'root', '');
        return $db;
    }
}