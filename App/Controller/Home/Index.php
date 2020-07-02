<?php

namespace App\Controller\Home;

use App\Object\Database;
use Extend\Sql\Pdo\Pdo;

class Index
{
    static function test()
    {
        
//        $db = Database::query();
        $sql = 'select * from ecs_users';
        $db = new Pdo();
        $db = $db->prepare('select * from ecs_users');
        dd($db);
        $db = $db->getAll($sql);

   
//        dd($db);
    }
}