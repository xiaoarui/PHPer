<?php

namespace App\Controller\Home;

use App\Object\Database;
use Extend\Sql\Pdo;

class Index
{
    static function test()
    {
        
//        $db = Database::query();
        $sql = 'select * from ecs_users';
        $db = new Pdo();
        $db = $db->query('select * from ecs_users');
        dd($db);
    }
}