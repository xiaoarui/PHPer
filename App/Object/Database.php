<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/2
 * Time: 9:41
 */

namespace App\Object;


use Extend\Sql\Pdo\Pdo;

class Database
{
    private $drive;


    private function __construct()
    {

        $this->drive = 'Pdo';


    }

    public static function query(){
        $res = new Pdo();
        $res = $res->connect();
        return $res;
    }

}