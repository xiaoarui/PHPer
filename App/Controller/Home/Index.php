<?php

namespace App\Controller\Home;

use App\Object\Database;
use Extend\Sql\Mysql;
use Extend\Sql\Mysqli;
use Extend\Sql\Pdo;

class Index
{
    static function test()
    {
        $db = new Pdo();
        $res = $db->query('select user_id from ecs_users limit 2 ');
        dump($res);


        $db1 = new Mysqli();
        $ree = $db1->query('select user_id from ecs_users limit 4');

        dd($ree);
    }
}